<?php

class Model {

	private $pdo;

	function __construct() {
		$this->pdo = Database::getDatabase('mysql')->getPDO();
	}

}