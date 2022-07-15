<?php

namespace App\Controllers;

use App\Models\User;
use App\Validators\UserValidator;
use Core\Controller;
use Core\View;


class UsersController extends Controller
{
    public function store() {
        $fields = filter_input_array(INPUT_POST, $_POST, 1);

        $validator = new UserValidator();

        if ($validator->validate($fields) && !$validator->emailExists($fields['email'])) {
            $fields['password'] = password_hash($fields['password'], PASSWORD_BCRYPT);
            $userId = User::create($fields);

            if ($userId) {
                redirect('login');
            }
        }

        $this->data['data'] = $fields;
        $this->data += $validator->getErrors();

        View::render('auth/registration', $this->data);
    }
}