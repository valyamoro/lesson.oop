<?php
declare(strict_types=1);

namespace App\lesson09122023\Model;

use App\lesson09122023\Database\PDODriver;

class Model
{
    const TABLE_NAME = '';

    public function __construct(protected PDODriver $builder)
    {
    }

    public static function create($builder): Model
    {
        return new static($builder);
    }

//    abstract function findById(int $id): array
//    {
//
//    }

//    abstract function findAll(): array;

    public function insert(array $data): int
    {
        $placeHolders = \str_repeat('?, ', \count($data) - 1) . '?';

        $query = 'insert into ' . static::TABLE_NAME . '( ' . \implode(', ',
                \array_keys($data)) . ') values (' . $placeHolders . ')';

        $this->builder->prepare($query)->execute(\array_values($data));

        return $this->builder->lastInsertId();
    }

    public function update(array $data, int $id): bool
    {
        $params = \implode(', ', \array_map(function ($key) {
            return "{$key} = :{$key}";
        }, \array_keys($data)));
        $data['id'] = $id;

        $query = 'UPDATE ' . static::TABLE_NAME . ' SET ' . $params . ' WHERE id = :id LIMIT 1';
        $this->builder->prepare($query)->execute($data);

        $result = $this->builder->rowCount();

        return (bool)$result;
    }

    public function delete(int $id): bool
    {
        $query = 'DELETE FROM ' . static::TABLE_NAME . ' WHERE id = ? LIMIT 1';

        $this->builder->prepare($query)->execute([$id]);
        $result = $this->builder->rowCount();

        return (bool)$result;
    }

    public function getAll(): array
    {
        $query = 'SELECT * FROM ' . static::TABLE_NAME;

        $result = $this->builder->prepare($query)->execute()->fetchAll();

        return $result;
    }

}
