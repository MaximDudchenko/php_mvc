<?php

namespace App\Controllers;

use App\Models\Post;
use Core\Controller;
use Core\View;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        View::render('posts/index', ['posts' => $posts]);
    }

    public function show(int $id)
    {
        $post = Post::find($id);

        View::render('posts/show', ['post' => $post]);
    }
}