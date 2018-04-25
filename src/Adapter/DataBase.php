<?php
class DataBase {
	public $conn;

	function connect() {
		try {
		    $this->$conn = new PDO("mysql:host={$server->name};dbname=myDB", $server->user, $server->key);
		    // set the PDO error mode to exception
		    $this->$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} 
		catch(PDOException $e) {
			echo "Connection failed: " . $e->getMessage();
		}	
	}
}
