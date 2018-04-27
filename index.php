<?php
define('ROOT', dirname(__FILE__));
session_start();
require_once(ROOT . '/components/autoload.php'); // автозагрузка классов

$routes = include(ROOT . '/setting/routers.php');
$run = new Bootstrap($routes);

