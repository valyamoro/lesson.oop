<?php
declare(strict_types=1);

namespace App\lesson09122023\Model;

class User extends Model
{
    const TABLE_NAME = 'users';

    public function findById(int $id): array
    {
        $query = 'SELECT * FROM ' . static::TABLE_NAME . ' WHERE id=:id';

        $this->builder->prepare($query)->execute([':id' => $id]);

        return $this->builder->fetch();
    }

    public function findAll(): array
    {
        $query = 'SELECT * FROM ' . static::TABLE_NAME . ' where order by :id desc';

        $this->builder->prepare($query)->execute();

        return $this->builder->fetchAll();
    }

}
