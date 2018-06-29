<?php


$file = file_get_contents('config/const.json');
$json = json_decode($file);

foreach ($json->source as $key => $value) {

    define( '__' . strtoupper( $key ) .'__', $value );

}

define( '__APP_ROOT__', $json->app );


define('__IMG__', 'images/');
define('__CSS__', 'src/Util/css/');
define('__MATERIALIZE__', 'src/Util/materialize/');


?>