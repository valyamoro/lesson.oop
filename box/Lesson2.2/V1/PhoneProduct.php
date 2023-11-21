<?php
declare(strict_types=1);

namespace App\Lesson2\V1;

class PhoneProduct extends Product
{
    public function __construct(
        int $id,
        string $title,
        int $quantity,
        int $price,
        private string $producer,
    ) {
        parent::__construct($id, $title, $quantity, $price);
    }

    public function getProducer(): string
    {
        return $this->producer;
    }

}
