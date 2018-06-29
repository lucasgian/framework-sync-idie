<?php


class RouterComponent {

	/*
		Configuração de rotas.
	*/
    private static $routes;

    /**
     * @return string
     */
    public function on() {
		$file = file_get_contents('config/const.json');
		$json = json_decode($file); 
		self::$routes = $json->routers;
		
		$context = substr($_SERVER['REQUEST_URI'], strlen(__APP_ROOT__));

		foreach (self::$routes as $key => $value) {
			if ($value->name == $context)
				return $value;
		}

		return self::$routes[0];
    }
}

?>