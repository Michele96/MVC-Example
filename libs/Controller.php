<?php

class Controller {

	protected $view;
	protected $model;

	function __construct() {
		$this->view = new View();
	}

	public function index() {
	}

	public function loadModel($name) {
		$model_name = $name.'_Model';
		$file = 'models/'.$model_name.'.php';
		if (file_exists($file)) {
			require $file;
			$this->model = new $model_name();
		}
	}

}