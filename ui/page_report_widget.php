<?php
namespace bp_report_stuff;

/**
 * The purpose of page_report_widget is to enable site owners to allow users to
 * report an entire page. This is something of a sledgehammer approach but does
 * mean that if all else fails everything is reportable.
 *
 * @author lordmatt
 */
class page_report_widget extends WP_Widget {
	public function __construct() {
		$widget_ops = array( 
			'classname' => 'page_report_widget',
			'description' => 'All users to report an entire page',
		);
		parent::__construct( 'page_report_widget', 'Report the page', $widget_ops );
	}
	
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		
		// @todo output a styleable button to trigger the report form UI

		echo $args['after_widget'];
	}
}
