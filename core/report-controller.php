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
	 * This is the method that handles the endpoint /report where the UI form
	 * submits to. It currently is in want of a lot more work.
	 * 
	 * @return object|array|string
	 */
	public function do_reports(){
		if(!$this->model()->user_can_('report')){
			$error = array();
			$error['error']=_x('You do not have permission to report in this context','user cannot report','bp_report_stuff');
			return $error;
		}
		// process report
		
		//@TODO:check NOnce
		
		$reason = __('Not set','bp_report_stuff');
		if(isset($_POST['reason'])){
			$reason = $_POST['reason'];
		}
		
		$item_reported = 0; //@todo get item reported
		
		$uri_to_item = ''; //@todo get uri reported
		
		$user_reporting = \get_current_user_id();
		
		
	}
	
}
