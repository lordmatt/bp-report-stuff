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
