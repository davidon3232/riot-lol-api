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
define('API_KEY', 'RGAPI-c707ca1f-a1e5-46c4-94b8-9a379b410991');