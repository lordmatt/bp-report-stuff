<?php
namespace bp_report_stuff;

/**
 * The class report-controller handles all report input from users.
 *
 * @author lordmatt
 */
class report_controller {

	public function establish_endpoints(){
		add_action( 'rest_api_init', function () {
			register_rest_route( 'bp_report_stuff/v1', '/report', array(
				'methods' => 'POST',
				'callback' => array($this,'do_reports'),
			) );
		} );
	}
	
	public function do_reports(){
		
	}
	
}
