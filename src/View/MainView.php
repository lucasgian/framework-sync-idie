<?php

class MainView implements View {
	function __construct($page) {
		$this->$page();
	}

	public function index() { 
		require_once __PAGES__.'home.php'; 
	}
	public function add() {}
	public function edit() {}
	public function view() {}
}

?>