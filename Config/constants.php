<?php
define('SERVER_PORT', (!empty($_SERVER['SERVER_PORT']) ? ':' . $_SERVER['SERVER_PORT'] : ''));
define('ROOT_URL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME'] . SERVER_PORT);
define('ASSETS_URL', ROOT_URL . '/assets');
define('ROOT_DIR', dirname(__DIR__));
define('APP_DIR', ROOT_DIR . '/App');
define('VIEW_DIR', APP_DIR . '/Views');
