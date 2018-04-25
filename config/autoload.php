<?php

require_once 'const.php';
require_once 'environment.php';


spl_autoload_register(function ($class_name) {
	/*
    if(file_exists(__COMPONENT__. $class_name . '.php'))
    	require_once __COMPONENT__. $class_name . '.php';
    
    if(file_exists(__PRESENTER__. $class_name . '.php'))
    	require_once __PRESENTER__. $class_name . '.php';

    if(file_exists(__VIEW__. $class_name . '.php'))
    	require_once __VIEW__. $class_name . '.php';

    if(file_exists(__INTERFACE__. $class_name . '.php'))
    	require_once __INTERFACE__. $class_name . '.php';

    if(file_exists(__ADAPTER__. $class_name . '.php'))
    	require_once __ADAPTER__. $class_name . '.php';

    if(file_exists(__ENTITY__. $class_name . '.php'))
        require_once __ENTITY__. $class_name . '.php';

    if(file_exists(__TABLE__. $class_name . '.php'))
        require_once __TABLE__. $class_name . '.php';
    */
});

?>