<?php
Core\View::render('layout/header');

if (!empty($posts)) {
    include_once VIEW_DIR . '/posts/parts/posts_list.php';
}

Core\View::render('layout/footer');