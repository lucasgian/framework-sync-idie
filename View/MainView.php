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

	public function writeApp() {
		
		$json = Decode::getJson();

		if (isset($_POST['dir'])) {

			$json->app = $_POST['dir'];	
			WriteOfFile::setJson("config/project.json", $json);
			
		}
		
		$this->index();

	}

	public function writeRouter() {
		
		$json = Decode::getJson();
		BootstrapClass::getAllStyle();
		// $array = (array) $json;
		//echo key(current($array));

		BootstrapClass::getCadText( DebugClass::dump_var($json) );
		die();

		if (isset($_POST['dir']) && isset($_POST['fileName'])) {

			$routes = $json->routes;

			array_push(
				$routes, array(
					"name" => "index",
					"presenter" => $_POST['dir'] . "View", 
					"page" => $_POST['fileName']
				)
			);
			
			$json->routes = $routes;
				
			WriteOfFile::setJson("database.json", $json);
			
		}
		
		$this->generation();

	}

}
