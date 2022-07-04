<?php

namespace App\Controllers;

use Core\Controller;
use Core\View;

class AuthController extends Controller
{
    public function login() {
        View::render('auth/login');
    }

    public function register() {
        View::render('auth/registration');
    }

    public function verify() {
        dd($_POST);
    }

    public function store() {
        dd($_POST);
    }
}