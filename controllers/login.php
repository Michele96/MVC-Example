<?php

class Login extends Controller {

	function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->view->render('login/home');
	}


	public function doLogin($username = "Anonymus") {
		$this->view->username = $username;
		$this->view->render('login/doLogin');
	}
}