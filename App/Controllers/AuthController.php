<?php

namespace App\Controllers;

use App\Helpers\SessionHelper;
use App\Validators\AuthValidator;
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
        $fields = filter_input_array(INPUT_POST, $_POST, 1);
        $validator = new AuthValidator();

        if ($validator->validate($fields) && $user =  $validator->emailExists($fields['email'])) {
            if ($validator->verifyPassword($fields['password'], $user->password)) {
                SessionHelper::setUserData($user->id);
                redirect();
            }
        }
        $this->data['data'] = $fields;
        $this->data += $validator->getErrors();

        View::render('auth/registration', $this->data);
    }

    public function logout()
    {
        SessionHelper::destroy();
        redirect();
    }
}