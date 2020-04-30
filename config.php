<?php
require 'vendor/autoload.php';

header('Access-Control-Allow-Origin: http://localhost');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}
set_time_limit(1200);
spl_autoload_register(function($class_name) {
    $filename = "class" . DIRECTORY_SEPARATOR . $class_name . ".php";
    if (file_exists(($filename))) {
        require_once($filename);
    }
});

define('BASE' , 'http://localhost/riot-lol-api/');
define('API_KEY', 'RGAPI-b0acf83c-7b3c-4faf-878b-27d1f6a66076');