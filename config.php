<?php

spl_autoload_register(function($class_name) {
    $filename = "class" . DIRECTORY_SEPARATOR . $class_name . ".php";
    if (file_exists(($filename))) {
        require_once($filename);
    }
});

define('PLATAFORM' , 'https://br1.api.riotgames.com');
define('API_KEY', 'RGAPI-4e42bade-bcb8-434d-abef-289f6bbd37f8');