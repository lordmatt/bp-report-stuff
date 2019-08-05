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


// set up the controller endpoints here

add_action( 'rest_api_init', function () {
  register_rest_route( 'bp_report_stuff/v1', '/report', array(
    'methods' => 'PST',
    'callback' => 'my_awesome_func',
  ) );
} );