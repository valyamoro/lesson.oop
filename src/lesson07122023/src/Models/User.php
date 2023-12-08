<?php
declare(strict_types=1);

namespace App\lesson07122023\src\Models;

class User extends Model
{
    protected const TABLE_NAME = 'products';

    public function getById(int $id): ?array
    {
        $query = 'SELECT * FROM ' . static::TABLE_NAME . ' where id=? limit 1';
        $result = $this->queryBuilder()->prepare($query)->execute([$id])->fetch();
        return $result;
    }

}
