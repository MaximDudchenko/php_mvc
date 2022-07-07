<?php

namespace Core\Traits;

use App\Helpers\SessionHelper;
use Core\Model;
use Core\Traits\ConnectionTrait;
use PDO;

trait QueryTrait
{
    use ConnectionTrait;

    static protected string|null $tableName = null;

    static protected string $sql = '';

    public static function all()
    {
        $sql = 'SELECT * FROM ' . static::$tableName;
        return static::connect()->query($sql)->fetchAll(PDO::FETCH_CLASS, static::class);
    }

    public static function find(int $id)
    {
        $sql = 'SELECT * FROM ' . static::$tableName . ' WHERE id = :id';
        $query = static::connect()->prepare($sql);
        $query->bindParam('id', $id, PDO::PARAM_INT);

        return $query->fetchObject(static::class);
    }

    public static function findBy(string $column, mixed $value)
    {
        $sql = 'SELECT * FROM' . static::$tableName . ' WHERE ' . $column . ' = :' . $column;
        $query = static::connect()->prepare($sql);
        $query->bindParam($column, $value);

        return $query->fetchObject(static::class);
    }

    public static function select(array $columns = ['*']): Model
    {
        static::$sql = '';
        static::$sql = 'SELECT ' . implode(', ', $columns) . ' FROM ' . static::$tableName . ' ';

        return new static();
    }

    public function where(array $conditions)
    {
        $key = array_key_last($conditions);
        $value = $conditions[$key];
        unset($conditions[$key]);

        static::$sql .= 'WHERE ' . implode( ' ', $conditions) . ' :value';
        $query = static::connect()->prepare(static::$sql);
        $query->bindValue(':value', $value);
        $query->execute();

        return $query->fetchAll(PDO::FETCH_CLASS, static::class);
    }

    public static function create(array $fields)
    {
        $values = static::prepareQueryValues($fields);

        $sql = 'INSERT INTO ' . static::$tableName . ' (' . $values['keys'] . ') VALUES (' . $values['placeholders'] . ')';
        $query = static::connect()->prepare($sql);

        foreach ($fields as $key => $value) {
            $query->bindValue(":{$key}", $value);
        }

        $query->execute();

        return (int)static::connect()->lastInsertId();
    }

    public function update(array $fields)
    {
        $sql = 'UPDATE ' . static::$tableName . ' SET ';
        foreach ($fields as $key => $value) {
            $sql .= "{$key} = :{$key} ";
        }
        $sql .= 'WHERE id = :id';

        $query = static::connect()->prepare($sql);
        foreach ($fields as $key => $value) {
            $query->bindValue(":{$key}", $value);
        }
        $query->bindValue(':id', SessionHelper::userId(), PDO::PARAM_INT);

        return $query->execute();
    }

    public static function delete(int $id)
    {
        $sql = 'DELETE FROM ' . static::$tableName . ' WHERE id = :id';
        $query = static::connect()->prepare($sql);
        $query->bindParam('id', $id, PDO::PARAM_INT);

        return $query->execute();
    }

    protected static function prepareQueryValues(array $fields)
    {
        $placeholder = [];
        $keys = array_keys($fields);
        $placeholder = preg_filter('/^/', ':', $keys);

        return [
          'keys' => implode(', ', $keys),
          'placeholders' => implode(', ', $placeholder)
        ];
    }

}