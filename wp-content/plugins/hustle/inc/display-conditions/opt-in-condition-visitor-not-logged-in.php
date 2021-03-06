<?php

class Opt_In_Condition_Visitor_Not_Logged_In extends Opt_In_Condition_Abstract implements Opt_In_Condition_Interface {
	public function is_allowed( Hustle_Model $optin ){
		return !is_user_logged_in();
	}

	public function label() {
		return __("Only if user is not logged in", Opt_In::TEXT_DOMAIN);
	}
}