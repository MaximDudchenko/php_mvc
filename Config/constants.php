<?php
define('SERVER_PORT', (!empty($_SERVER['SERVER_PORT']) ? ':' . $_SERVER['SERVER_PORT'] : ''));
define('ROOT_URL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME'] . SERVER_PORT);
define('ASSETS_URL', ROOT_URL . '/assets');
define('IMG_URL', ASSETS_URL . '/image');
define('ROOT_DIR', dirname(__DIR__));
define('APP_DIR', ROOT_DIR . '/App');
define('VIEW_DIR', APP_DIR . '/Views');
define('IMG_DIR', ROOT_DIR . '/public/assets/images');
define('CATEGORIES_IMG_DIR', IMG_DIR . '/categories');
define('POSTS_IMG_DIR', IMG_DIR . '/posts');
