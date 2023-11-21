<?php

namespace App\lesson20112023\V1;

class ProductFactory
{
    public static function createNewProduct(array $data): Product
    {
        if ($data['type'] === '1') {
            return new PhoneProduct((int)$data['id'], $data['title'], (int)$data['price'], (int)$data['quantity'], $data['producer']);
        } elseif ($data['type'] === '2') {
            return new BookProduct((int)$data['id'], $data['title'], (int)$data['price'], (int)$data['quantity'], $data['author']);
        } else {
            throw new \DomainException('Not Found type class');
        }
    }
    public function getInformation(): string
    {
        return $this->id . ' '. $this->title . ' ' . $this->quantity . ' ' . $this->price;
    }
}