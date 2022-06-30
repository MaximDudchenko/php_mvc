<?php

namespace Config;

class Config
{
    public static function get(string $name)
    {
        $params = include __DIR__ . '/params.php';

        $keys = explode('.', $name);

        return self::findByKey($keys, $params);
    }

    private static function findByKey(array $keys, array $params): mixed
    {
        $value = null;
        $key = array_shift($keys);

        if (array_key_exists($key, $params)) {
            $value = is_array($params[$key]) ? self::findByKey($keys, $params[$key]) : $params[$key];
        }
        return $value;
    }
}