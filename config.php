<?php
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
define('API_KEY', 'RGAPI-34cd76a1-9545-48c1-995c-9f4798bf14e3');