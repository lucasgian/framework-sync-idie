<?php

require_once "idie/util/Decode.php";

$json = Decode::getJson();

foreach ($json->source as $key => $value) {

    define( '__' . strtoupper( $key ) .'__', $value );

}

define( '__APP_ROOT__', $json->app );

?>