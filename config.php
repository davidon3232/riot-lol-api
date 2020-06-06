<?php
require 'vendor/autoload.php';

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

define('DIR_APP', __DIR__ . DIRECTORY_SEPARATOR);
spl_autoload_register(function ($classe) {
    if (file_exists(DIR_APP . "/{$classe}.php")) {
        include_once DIR_APP . "/{$classe}.php";
    }
});
define('BASE', 'http://' . $_SERVER['SERVER_NAME'] . '/lol-api/');
define('API_KEY', 'RGAPI-2fbea767-11ec-4a16-a92b-c7e3a2e828d1');
