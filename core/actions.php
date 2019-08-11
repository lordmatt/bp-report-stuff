<?php
namespace bp_report_stuff;

/**
 * This class contains standard actions which can be taken in response to a user
 * report.
 *
 * @author lordmatt
 */
class actions extends core {
	
	function spam_user($user_id){
		# spam_user is RS remove_users is WP
		if($this->model()->user_can_('spam_user')||$this->model()->user_can_('remove_users')){
			// do action
			
			return true;
		}
		return false;
	}
	
	function warn_user($user_id,$message){
		# spam_user is RS remove_users is WP
		if($this->model()->user_can_('moderate')||$this->model()->user_can_('message',$user_id)){
			// do send pm
			
			// also send email
			
			// add user_meta warned:message
			$this->model()->record_user_warning($user_id,$message);
			return true;
		}
		return false;
	}
	
}
