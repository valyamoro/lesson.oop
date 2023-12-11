<?php
declare(strict_types=1);
namespace App\lesson07122023\src\Models;

class Product extends Model
{
    protected const TABLE_NAME = 'products';

    public function add(array $data): int
    {
        $query = 'INSERT INTO ' . static::TABLE_NAME . ' (title, quantity, price, discount, created_at, updated_at)
        VALUES (:title, :quantity, :price, :discount, :created_at, :updated_at)';

        $now = \date('Y-m-d');

        $result = self::$queryBuilder->prepare($query)->execute([
            ':title' => $data['title'],
            ':quantity' => $data['quantity'],
            ':price' => $data['price'],
            ':discount' => $data['discount'],
            ':created_at' => $now,
            ':updated_at' => $now,
        ])->lastInsertId();

        return $result;
    }

    public function delete(int $id): bool
    {
        // TODO: Implement delete() method.
    }

    public function update(array $data, int $id): int
    {
        // TODO: Implement update() method.
    }
}
