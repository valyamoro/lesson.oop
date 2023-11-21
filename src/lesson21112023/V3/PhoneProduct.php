<?php
declare(strict_types=1);

namespace App\lesson21112023\V3;

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

    public function getPhoneInformation(): string
    {
        return parent::getInformation() . ' ' . $this->producer;
    }

}
