<?php

namespace App\Controllers\Admin;

use App\Helpers\SessionHelper;
use App\Models\Category;
use App\Models\Post;
use App\Services\FileUploaderService;
use Core\View;


class PostController extends BaseController
{
    public function index()
    {
        $posts = Post::all();
        $categories = Category::all();


        View::render('admin/posts/index', ['posts' => $posts, 'categories' => $categories]);
    }

    public function create()
    {
        $categories = Category::all();

        View::render('admin/posts/create', ['categories' => $categories]);

    }

    public function store()
    {
        $file = null;

        if (!empty($_FILES['image'] && $_FILES['image']['size'] > 0)) {
            $file = FileUploaderService::upload($_FILES['image'], POSTS_IMG_DIR);
        }

        Post::create([
            'title' => $_POST['title'],
            'user_id' => SessionHelper::userId(),
            'category_id' => $_POST['category_id'],
            'body' => $_POST['body'],
            'image' => $file
        ]);

        redirect('admin/posts');

    }

    public function edit(int $id)
    {
        $post = Post::find($id);
        $categories = Category::all();

        View::render('admin/posts/edit', ['categories' => $categories, 'post' => $post]);

    }

    public function update(int $id)
    {
        $post = Post::find($id);
        $postData = $_POST;

        if (!empty($_FILES['image']) && $_FILES['image']['size'] > 0) {
            FileUploaderService::remove(POSTS_IMG_DIR . '/' . $post->image);
            $file = FileUploaderService::upload($_FILES['image'], POSTS_IMG_DIR);
            $postData['image'] = $file;
        }

        $post->update($postData);

        redirect('admin/posts');
    }

    public function destroy(int $id)
    {
        Post::delete($id);


        redirect('admin/posts');
    }
}