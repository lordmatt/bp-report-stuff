<?php
namespace bp_report_stuff;

/**
 * This class provides common reused code that other classes may depend upon.
 *
 * @author lordmatt
 */
abstract class core {
	
	protected $model = NULL;
	
    /**
	 * Internal path to model this enable us to call for actions on a report 
	 * object which can be passed through to the model correctly without the
	 * report object having any data layer code itself.
	 * 
	 * @return \bp_report_stuff\report_model
	 */
	protected function model(){
		if(!isset($this->model) || !($this->model instanceof report_model) ){
			$this->model = new report_model();
		}
		return $this->model;
	}
}
