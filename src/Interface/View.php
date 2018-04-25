<?php
interface View {
	function __construct($page);
	public function index();
	public function add();
	public function edit();
	public function view();
}