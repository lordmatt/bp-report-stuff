<?php
namespace bp_report_stuff;

/**
 * The class report-controller handles all report input from users.
 *
 * @author lordmatt
 * 
 * 
 * This file is part of BP Report Stuff.
 * 
 * BP Report Stuff is free software: you can redistribute it and/or modify it under 
 * the terms of the GNU General Public License as published by the Free Software 
 * Foundation, either version 2 of the License, or (at your option) any later 
 * version.
 * 
 * BP Report Stuff is distributed in the hope that it will be useful, but WITHOUT ANY 
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR 
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License along with 
 * datastore. If not, see http://www.gnu.org/licenses/.
 */
class report_controller extends core {

	private $model = NULL;
	
	/**
	 * This is called early on in the page load to set up an endpoint.
	 */
	public function establish_endpoints(){
		add_action( 'rest_api_init', function () {
			register_rest_route( 'bp_report_stuff/v1', '/report', array(
				'methods' => 'POST',
				'callback' => array($this,'do_reports'),
			) );
		} );
	}
	
	/**
	 * 
	 * @param string $post the POST var to get
	 * @param array|string|boolean $default
	 * @return array|string
	 */
	protected function get_post($post,$default){
		if(isset($_POST[$post])){
			return $_POST[$post];
		}
		return $default;
	}
	
	protected function verify_nonce( $nonce, $action ){
		return wp_verify_nonce( $nonce, $action );
	}

	/**
	 * Error codes are constructed using the following pattern: [XY]: where X is  
	 * the endpoint method (one "number" per endpoint), and where Y is the error 
	 * (in the order added).   Error codes should be unique. An end point has 10
	 * possible error codes 0-9.  This function should never be called except if
	 * an unhandled exception is encountered.
	 * 
	 * #1 [do_reports]
	 * 
	 * @return array
	 */
	protected function return_unknown_error(){
			$error = array();
			$error['error']['code']=-1;
			$error['error']['message']=_x('Unknown error. Please file a support ticket and/or try again','unknown failure','bp_report_stuff');
			return $error;
	}
	/**
	 * This is the method that handles the endpoint /report where the UI form
	 * submits to. It currently is in want of a lot more work.
	 * 
	 * @return object|array|string
	 */
	public function do_reports(){
		
		// XSS test
		if(!$this->verify_nonce($this->get_post('nonce',-1),'report')){
			$error = array();
			$error['error']['code']=10;
			$error['error']['message']=_x('Possible XSS attack, expired form, or error. Please reload page and try again.','NOnce failed','bp_report_stuff');
			return $error;
		}
		
		// internal check
		if(!$this->model()->user_can_('report')){
			$error = array();
			$error['error']['code']=11;
			$error['error']['message']=_x('You do not have permission to report in this context','user cannot report','bp_report_stuff');
			return $error;
		}
		
		// process report
		
		$reason = __('Not set','bp_report_stuff');
		if(isset($_POST['reason'])){
			$reason = $_POST['reason'];
		}
		
		$item_id_reported = $this->get_post('object_id',0);
		$item_type_reported = $this->get_post('object_type',NULL);
		
		$uri_to_item = $this->get_post('uri',FALSE);
		
		$user_reporting = \get_current_user_id();
		
		
	}
	
}
