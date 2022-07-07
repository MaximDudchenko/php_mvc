<?php

namespace App\Validators;

class AuthValidator extends UserBaseValidator
{
    protected array $errors = [
        'email' => 'Email or password is invalid',
        'password' => 'Email or password is invalid'
    ];

    protected array $rules = [
        'email' => '/^[a-zA-Z0-9.!#$%&\'*+\/\?^_`{|}~-]+@[A-Z0-9.-]+\.[A-Z]{2,}$/i',
        'password' => '/[a-zA-Z0-9.!#$%&\'*+\/\?^_`{|}~-]{8,}/'
    ];

    public function verifyPassword(string $formPassword, string $userPassword): bool
    {
        if (password_verify($formPassword, $userPassword)) {
            $this->errors['password'] = 'Email or password is invalid';
            return false;
        }
        return true;
    }
}