<?php
//Include Config
require_once('config/config.php');

//Helper Files
require_once('helpers/system_helper.php');


//Auto Loader
function tony_autoloader($class_name) {
    require_once('libraries/' . $class_name . '.php');
}

spl_autoload_register('tony_autoloader');
