<?php

class Bootstrap {

	private $controller;

	function __construct() {
		$url = isset($_GET['url']) ? $_GET['url'] : 'index';
		$url = explode("/", rtrim($url, "/"));

		$file = "controllers/".$url[0].".php";
		if (file_exists($file)) {
			require $file;
			$this->controller = new $url[0];
		} else {
			$this->error();
			$this->controller->index();
			return;
		}

		$this->controller->loadModel($url[0]);

		if (isset($url[2])) {
            if (method_exists($this->controller, $url[1])) {
                $this->controller->{$url[1]}($url[2]);
                return;
            } else $this->error();
        } else if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->controller->{$url[1]}();
                return;
            } else $this->error();
        }

        $this->controller->index();
	}

	private function error() {
		require 'controllers/error.php';
		$this->controller = new Error();
	}
}