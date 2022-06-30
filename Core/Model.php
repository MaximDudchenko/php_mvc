<?php

namespace Core;

use Cassandra\Exception\ConfigurationException;
use Config\Config;
use PDO;

class Model
{
    protected static PDO|null $connect = null;

    public static function connect()
    {
        if (is_null(self::$connect)) {
            $dsn = 'mysql:host=' . Config::get('db.host') . ';dbname=' . Config::get('db.database');
            $options = [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_CLASS,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ];
            self::$connect = new PDO(
                $dsn,
                Config::get('db.user'),
                COnfig::get('db.password'),
                $options
            );
        }
        return self::$connect;
    }
}