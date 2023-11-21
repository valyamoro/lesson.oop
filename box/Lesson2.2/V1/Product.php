<?php
declare(strict_types=1);

namespace App\Lesson2\V1;

abstract class Product
{
    public function __construct(
        private int $id,
        private string $title,
        private int $quantity,
        private int $price,
    ) {}

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

    public function getInformation(): string
    {
        return $this->id . ' ' . $this->title . ' ' . $this->quantity . ' ' . $this->price;
    }

    public static function createNewProduct(array $data): Product
    {
        if ($data['type'] === '1') {
            return new PhoneProduct((int)$data['id'], $data['title'], (int)$data['quantity'], (int)$data['price'], $data['producer']);
        } elseif ($data['type'] === '2') {
            return new BookProduct((int)$data['id'], $data['title'], (int)$data['quantity'], (int)$data['price'], $data['author']);
        } else {
            throw new \DomainException('Not found type class');
        }
    }

}
