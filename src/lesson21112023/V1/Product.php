<?php
declare(strict_types=1);

namespace App\lesson21112023\V1;

class Product
{
    public function __construct(
        private int $id,
        private string $title,
        private int $quantity,
        private int $price,
        private ?string $producer,
        private ?string $author,
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

    public function getProducer(): string
    {
        return $this->producer;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getInformation(): string
    {
        return $this->id . ' '. $this->title . ' ' . $this->quantity . ' ' . $this->price;
    }
    public function getBookInformation(): string
    {
        return $this->getInformation()  . ' ' . $this->author;
    }

    public function getPhoneInformation(): string
    {
        return $this->getInformation()  . ' ' . $this->producer;
    }

}
