<?php

/* 
 * This file handles installing and uninstalling actions.
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



function bp_report_stuff_activation(){
	// dbdelta here for making the tables
}

function bp_report_stuff_deactivation(){
	// ?
}

function bp_report_stuff_uninstall(){
	// drop tables, I guess.
}

register_activation_hook(__FILE__, 'bp_report_stuff_activation');
register_deactivation_hook(__FILE__, 'bp_report_stuff_deactivation');
register_uninstall_hook(__FILE__, 'bp_report_stuff_uninstall');

// Enqueue stuff

# @TODO Enqueue the JS asset

// we will use some add_role and add_cap here
// suggest: 
// roles - triage, moderation, and...? 
// caps - cooment-on-own, comment-on-other, action-on-own, action-on-other, close-own, close-other

// set up the controller endpoints here (the controller does this)
$bp_report_stuff_controller = new bp_report_stuff\report_controller();