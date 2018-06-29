<?php
class LoginView implements View {
	function __construct($page) {
		$this->$page();
	}
	public function index() { 
		require_once __VIEW__.'Login/index.php'; 
	}
	public function add() {}
	public function edit() {}
	public function view() {}
}
?>