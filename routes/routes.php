<?php

//$router->add('posts', ['controller' => \App\Controllers\PostsController::class, 'action' => 'index', 'method' => 'GET']);
//$router->add('posts/{id:\d+}', ['controller' => \App\Controllers\PostsController::class, 'action' => 'show', 'method' => 'GET']);

$router->add('login', ['controller' => \App\Controllers\AuthController::class, 'action' => 'login', 'method' => 'GET']);
$router->add('registration', ['controller' => \App\Controllers\AuthController::class, 'action' => 'register', 'method' => 'GET']);
$router->add('auth/verify', ['controller' => \App\Controllers\AuthController::class, 'action' => 'verify', 'method' => 'POST']);
$router->add('auth/users/store', ['controller' => \App\Controllers\AuthController::class, 'action' => 'store', 'method' => 'POST']);