<?php
/*
Plugin Name: BP Report Stuff
Plugin URI: https://github.com/lordmatt/bp-report-stuff
Description: Enable community moderation of a buddy press site.
Author: Matthew Brown
Author URI: http://matthewdbrown.authorbuzz.co.uk/
Version: 0.1.0
License: GPLv3 or later
Text Domain: bp_report_stuff
*/

define( 'BP_REPORT_STUFF_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

// includes go here
require_once BP_REPORT_STUFF_PLUGIN_DIR.'core/report-model.php';

require_once BP_REPORT_STUFF_PLUGIN_DIR.'core/setup.php';