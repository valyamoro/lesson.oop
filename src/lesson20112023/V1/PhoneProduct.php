<?php

namespace App\lesson20112023\V1;

class PhoneProduct extends Product
{
    public function __construct(
        private int $id,
        private string $title,
        private int $quantity,
        private int $price,
        private string $producer,
    ) {
        parent::__construct($this->id, $this->title, $this->quantity, $this->price, $this->producer);
    }

    public function getProducer(): string
    {
        return $this->producer;
    }
}

