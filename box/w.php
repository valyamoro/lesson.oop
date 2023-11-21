<?php

abstract class Product
{
    public function __construct(
        private int $id,
        private string $title,
        private int $quantity,
        private int $price,
    ) {
    }

    public function getId(): int
    {
        return $this->id;
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
}

class ProductRepository
{
    public function getAll(): string
    {
        return 'select * from products order by id desc';
    }

    public function getById(int $id): string
    {
        return 'select * from products where id=? limit 1' . $id; // почему тут конкатенация с айди?
    }

    public function getBySlug(string $slug): string
    {
        return /* ... */;
    }
}