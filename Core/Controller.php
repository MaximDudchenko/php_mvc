<?php

namespace Core;

use App\Helpers\SessionHelper;

abstract class Controller
{
    public  function before(string $action)
    {
        return true;
    }

    public function after(string $action) {}
}