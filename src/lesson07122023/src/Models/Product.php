<?php
declare(strict_types=1);

namespace App\lesson07122023\src\Models;

class Product extends Model
{
    protected const TABLE_NAME = 'products';
    private string $title;
    private int $quantity;
    private int $price;
    private int $discount;
    private string $created_at;
    private string $updated_at;

    public function add(string $title, int $quantity, int $price, int $discount): int
    {
        $query = 'INSERT INTO ' . static::TABLE_NAME . ' (title, quantity, price, discount, created_at, updated_at)
        VALUES (:title, :quantity, :price, :discount, :created_at, :updated_at)';

        $now = \date('Y-m-d');

        $result = self::$queryBuilder->prepare($query)->execute([
            ':title' => $title,
            ':quantity' => $quantity,
            ':price' => $price,
            ':discount' => $discount,
            ':created_at' => $now,
            ':updated_at' => $now,
        ])->lastInsertId();

        return $result;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function getDiscount(): int
    {
        return $this->discount;
    }

}
