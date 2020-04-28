<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

spl_autoload_register(function($class_name) {
    $filename = "class" . DIRECTORY_SEPARATOR . $class_name . ".php";
    if (file_exists(($filename))) {
        require_once($filename);
    }
});

define('BASE' , 'http://localhost/riot-lol-api/');
define('API_KEY', 'RGAPI-736dc35b-4e90-4f36-816f-00f39bbcb329');