<?php

namespace App\lesson20112023\V1;

class BookProduct extends Product
{
    public function __construct(
        private int $id,
        private string $title,
        private int $quantity,
        private int $price,
        private string $author,
    ) {
        parent::__construct($this->id, $this->title, $this->quantity, $this->price, $this->author);
    }

    public function getAuthor(): string
    {
        return $this->author;
    }
}