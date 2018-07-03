<?php

class MainView {
	function __construct($page) {
		$this->$page();
	}

	public function index() { 
		require_once __STATIC__.'head.php';
		require_once __STATIC__.'home.php'; 
		require_once __STATIC__.'footer.php'; 
	}
	
	public function generation() {
		require_once __STATIC__.'head.php';
		require_once __STATIC__.'generation.php'; 
		require_once __STATIC__.'footer.php'; 
	}

	public function add() {}
	public function edit() {}
	public function view() {}
}

?>