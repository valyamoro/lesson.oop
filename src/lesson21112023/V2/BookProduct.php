<?php
declare(strict_types=1);

namespace App\lesson21112023\V2;

class BookProduct extends Product
{
    public function __construct(
        int $id,
        string $title,
        int $quantity,
        int $price,
        private string $author,
    ) {
        parent::__construct($id, $title, $quantity, $price);
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getInformation(): string
    {
        return parent::getInformation() . ' ' . $this->getAuthor();
    }

}
