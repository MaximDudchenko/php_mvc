<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);

require_once dirname(__DIR__) . '/Config/constants.php';
require_once ROOT_DIR . '/vendor/autoload.php';

$dotenv = \Dotenv\Dotenv::createUnsafeImmutable(dirname(__DIR__));
$dotenv->load();

use Core\Router;

try {
    $router = new Router();

    require_once ROOT_DIR . '/routes/routes.php';


    if (!preg_match('/assets/i', $_SERVER['REQUEST_URI'])) {
        $router->dispatch($_SERVER['REQUEST_URI']);
    }
} catch (Exception $e) {
    dd($e);
}
