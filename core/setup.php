<?php

/* 
 * This file handles installing and uninstalling actions.
 */


function bp_report_stuff_activation(){
	
}

function bp_report_stuff_deactivation(){
	
}

function bp_report_stuff_uninstall(){
	
}

register_activation_hook(__FILE__, 'bp_report_stuff_activation');
register_deactivation_hook(__FILE__, 'bp_report_stuff_deactivation');
register_uninstall_hook(__FILE__, 'bp_report_stuff_uninstall');