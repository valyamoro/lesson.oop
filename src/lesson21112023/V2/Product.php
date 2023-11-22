<?php
declare(strict_types=1);

namespace App\lesson21112023\V2;

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
        return $this->getId() . ' ' .  $this->getTitle() . ' ' . $this->getQuantity() . ' ' . $this->getPrice();
    }

}
