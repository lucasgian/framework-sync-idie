<?php

class MainView {
	function __construct($page) {
		$this->$page();
	}

	public function index() { 
		require_once __STATIC__.'home.php'; 
	}
	public function add() {}
	public function edit() {}
	public function view() {}
}

?>