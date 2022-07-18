<?php

namespace App\Controllers\Admin;

use Core\Controller;
use Core\View;

class DashboardController extends Controller
{
    public function index()
    {
        View::render('admin/dashboard');
    }
}