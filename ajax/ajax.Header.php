<?php
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


