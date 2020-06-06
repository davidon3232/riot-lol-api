<?php

require "config.php";

use Controller;

$routes = new Controller\RoutesCtl();
$routes->run();


