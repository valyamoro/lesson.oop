<?php
declare(strict_types=1);

namespace App\lesson09122023\Model;

use App\lesson09122023\Database\DatabaseConfiguration;
use App\lesson09122023\Database\DatabaseConnection;
use App\lesson09122023\Database\MySQLIDriver;
use App\lesson09122023\Database\PDODriver;

class Model
{
    const TABLE_NAME = '';
    public function __construct(
        protected $builder,
    ) {}

    public static function create($builderArg, $sec): Model
    {
        if (!is_null($builderArg)) {
            return new static($builderArg);
        } else {
            return new static($sec);
        }
    }

    public function insert(array $data): int
    {
        $placeHolders = \str_repeat('?, ', \count($data) - 1) . '?';

        $query = 'insert into ' . static::TABLE_NAME . '( ' . \implode(', ', \array_keys($data)) . ') values (' . $placeHolders . ')';

        $this->builder->prepare($query)->execute(\array_values($data));

        return $this->builder->lastInsertId();
    }

    public function update(array $data): bool
    {
        $setClause = \implode(', ', \array_map(function($key) {
            return "{$key} = :{$key}";
        }, \array_keys($data)));

        $query = 'UPDATE ' . static::TABLE_NAME . ' SET ' . $setClause . ' WHERE id = :id LIMIT 1';

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
