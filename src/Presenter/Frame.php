<?php

class Frame extends RouterComponent {
	function __construct() {
		$router = $this->on();
		$this->viewController($router['presenter'], $router['page']);
	}

	function viewController($name, $page) {
		new $name($page);
	}
}

?>