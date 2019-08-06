<?php

/* 
 * This file handles installing and uninstalling actions.
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


// we will use some add_role and add_cap here
// suggest: 
// roles - triage, moderation, and...? 
// caps - cooment-on-own, comment-on-other, action-on-own, action-on-other, close-own, close-other

// set up the controller endpoints here

$bp_report_stuff_controller = new bp_report_stuff\report_controller();