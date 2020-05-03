<?php
require 'vendor/autoload.php';

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}
spl_autoload_register(function($class_name) {
    $filename = __DIR__ . "\class" . DIRECTORY_SEPARATOR . $class_name . ".php";
    if (file_exists(($filename))) {
        require_once($filename);
    }
});

define('BASE', 'http://' . $_SERVER['SERVER_NAME'] . '/riot-lol-api/');
define('API_KEY', 'RGAPI-d713d74d-04ef-43aa-b575-f783b87cd0ac');