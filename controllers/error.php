<?php

class Error extends Controller {

	function __controller() {
		parent::__controller();		
	}

	public function index() {
		$this->view->render('error/home');
	}

}