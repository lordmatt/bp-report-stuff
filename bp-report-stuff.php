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

/**
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

define( 'BP_REPORT_STUFF_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

// includes go here
require_once BP_REPORT_STUFF_PLUGIN_DIR.'core/report-model.php';
require_once BP_REPORT_STUFF_PLUGIN_DIR.'core/report-controller.php';
require_once BP_REPORT_STUFF_PLUGIN_DIR.'core/report-object.php';

require_once BP_REPORT_STUFF_PLUGIN_DIR.'core/setup.php';

// changing this may cause undesirable behaviour proceed at your own risk
define('BP_REPORT_STUFF_META_WARNINGS_KEY','_report_stuff_warnings');