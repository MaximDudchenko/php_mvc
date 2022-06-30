<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);

require_once dirname(__DIR__) . '/vendor/autoload.php';
$dotenv = \Dotenv\Dotenv::createUnsafeImmutable(dirname(__DIR__));
$dotenv->load();

use Core\Model;

dd(Model::connect());
