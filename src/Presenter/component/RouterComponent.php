<?php


class RouterComponent {

	/*
		Configuração de rotas.
	*/
    private static $routes = [
			['name' => 'main', 'presenter' => 'MainView', 'page' => 'index'],
			['name' => 'login', 'presenter' => 'LoginView', 'page' => 'index']
    ];

    /**
     * @return string
     */
    public function on() { 
		$context = substr($_SERVER['REQUEST_URI'], strlen(__APP_ROOT__));

		foreach (self::$routes as $value) {
			if ($value['name'] == $context)
				return $value;
		}

		return self::$routes[0];
    }
}

?>