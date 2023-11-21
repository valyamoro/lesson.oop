<?php
declare(strict_types=1);

namespace App\Lesson2\V1;

class ProductFactory
{
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
