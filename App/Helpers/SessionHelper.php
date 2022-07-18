<?php

namespace App\Helpers;

class SessionHelper
{
    public static function isUserLoggedIn(): bool
    {
        return !empty($_SESSION['user_data']);
    }

    public static function userId(): int|null
    {
        return $_SESSION['user_data']['id'];
    }

    public static function setUserData(int $id, array ...$args)
    {
        $_SESSION['user_data'] = array_merge(['id' => $id], $args);
    }

    public static function destroy()
    {
        if (session_id()) {
            session_destroy();
        }
    }

}