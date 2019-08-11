<?php
namespace bp_report_stuff;

/**
 * This class contains standard actions which can be taken in response to a user
 * report.
 *
 * @author lordmatt
 */
class actions extends core {
	/**
	 * Moderator action: Set user account as spam. Which effectively deletes 
	 * them. Returns TRUE if the action happened and FALSE if it did not.
	 * 
	 * @todo trigger set user as spam
	 * 
	 * @param int $user_id
	 * @return boolean
	 */
	function spam_user($user_id){
		# spam_user is RS remove_users is WP
		if($this->model()->user_can_('spam_user')||$this->model()->user_can_('remove_users')){
			// do action
			// I have to be honest, I have not figured out how this is best done
			// but I assume it is documented somewhere.
			return true;
		}
		return false;
	}
	
	/**
	 * Send the user a warning.  Useful, for example, if you run a three strikes 
	 * rule. The warning will be recoreded in user_meta.
	 * 
	 * @todo send PM
	 * @todo send email
	 * 
	 * @param int $user_id
	 * @param string $message
	 * @return boolean
	 */
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
