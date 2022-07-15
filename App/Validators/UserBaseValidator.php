<?php

namespace App\Validators;

use App\Models\User;

class UserBaseValidator extends BaseValidator
{
    public function emailExists(string $email): bool|User
    {
        if ($user = User::findBy('email', $email)) {
            $this->errors = [
                'email' => 'User with this email already exists'
            ];
            return $user;
        }
        return false;
    }


}