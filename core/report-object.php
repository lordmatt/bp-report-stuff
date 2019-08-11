<?php
namespace bp_report_stuff;

/**
 * Class report is an object reprisenting a full report.
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
class report extends core {

	public $report;
	public $comments;
	protected $id;
	
	/**
	 * 
	 * @param array $report
	 * @param array $comments
	 * @param null|\bp_report_stuff\report_model $model
	 */
	public function __construct($report,$comments=array(),$model=NULL) {
		$this->report   = $report;
		$this->comments = $comments;
		$this->model    = $model;
		if(isset($report['id'])){
			$this->id = $report['id'];
		}else{
			// error 
			$this->id = 0;
		}
	}
	
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
	
	/**
	 * Current user adds comment to this report.
	 * 
	 * @param string $comment
	 * @param type $action
	 */
	public function add_comment($comment,$action=NULL){
		$this->model()->add_comment_to_report($this->id,$comment,NULL,$action);
	}
	
}
