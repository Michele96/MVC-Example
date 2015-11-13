<?php

class Database {

	private static $instance;
	private $pdo;

	private function __construct($dbname, $user, $password) {
		$this->pdo = new PDO("mysql:dbname=$dbname;host=127.0.0.1", $user, $password);
	}

	public static function getDatabase($dbname = null, $user = 'root', $password = '') {
		if (!isset(self::$instance)) {
			self::$instance = new Database($dbname, $user, $password);
		}
		return self::$instance;
	}

	public function getPDO() {
		return $this->pdo;
	}
}