<?php

namespace App\Validators;

class BaseValidator
{
    protected array $errors = [];
    protected array $rules = [];

    public function validate(array $fields)
    {
        foreach ($fields as $key => $field) {
            if (preg_match($this->rules[$key], $field)) {
                unset($this->errors[$key]);
            }
        }
        return empty($this->errors);
    }

    public function getErrors(): array
    {
        return $this->errors;
    }
}