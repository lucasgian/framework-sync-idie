<?php

require_once 'const.php';
require_once 'environment.php';


spl_autoload_register(function ($class_name) {

    $json = Decode::getJson();

    foreach ($json->source as $key => $value) {

        if ( file_exists( $value . $class_name . '.php' ) ) {

            require_once $value . $class_name . '.php';

        }
            
    }
    
});

?>