<?php
require '../vendor/autoload.php';
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}
header('Content-Type: text/html; charset=ISO-8859-1');

spl_autoload_register(function($class_name) {
    $filename = "../class" . DIRECTORY_SEPARATOR . $class_name . ".php";
    if (file_exists(($filename))) {
        require_once($filename);
    }
});

define('BASE', 'http://' . $_SERVER['SERVER_NAME'] . '/riot-lol-api/');
define('API_KEY', 'RGAPI-b0acf83c-7b3c-4faf-878b-27d1f6a66076');


