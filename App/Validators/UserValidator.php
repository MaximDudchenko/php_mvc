<?php

namespace App\Validators;

use App\Models\User;

class UserValidator extends UserBaseValidator
{
    protected array $errors = [
      'name' => 'The name should contain more than 2 letters',
      'surname' => 'The name should contain more than 2 letters',
      'birthdate' => 'Birth date is invalid',
      'email' => 'Email is invalid',
      'password' => 'The password should contain more than 7 letters'
    ];

    protected array $rules = [
        'name' => '/[A-Za-zА-Яа-я]{2,}/',
        'surname' => '/[A-Za-zА-Яа-я]{2,}/',
        'birthdate' => '/[\d]{4}-[\d]{2}-[\d]{2}/',
        'email' => '/^[a-zA-Z0-9.!#$%&\'*+\/\?^_`{|}~-]+@[A-Z0-9.-]+\.[A-Z]{2,}$/i',
        'password' => '/[a-zA-Z0-9.!#$%&\'*+\/\?^_`{|}~-]{8,}/'
    ];

}