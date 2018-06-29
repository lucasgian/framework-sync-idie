<?php

require_once 'const.php';
require_once 'environment.php';


spl_autoload_register(function ($class_name) {

    $file = file_get_contents('config/const.json');
    $json = json_decode($file);

    foreach ($json->source as $key => $value) {

        if ( file_exists( $value . $class_name . '.php' ) ) {

            require_once $value . $class_name . '.php';

        }
            
    }
    
});

?>