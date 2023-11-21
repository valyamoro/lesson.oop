<?php
declare(strict_types=1);

namespace App\lesson21112023\V2;

use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    public function testCreateProductBook(): void
    {
        $data = [
            'id' => '1',
            'title' => 'Learning PHP',
            'quantity' => '30',
            'price' => '500',
            'author' => 'kutlumbek',
        ];
        $product = new BookProduct((int)$data['id'], $data['title'], (int)$data['quantity'], (int)$data['price'],
            $data['author']);

        $this->assertSame(1, $product->getId());
        $this->assertSame('Learning PHP', $product->getTitle());
        $this->assertSame(30, $product->getQuantity());
        $this->assertSame(500, $product->getPrice());
        $this->assertSame('kutlumbek', $product->getAuthor());
    }

    public function testCreateProductPhone(): void
    {
        $data = [
            'id' => '2',
            'title' => 'NOKIA 404',
            'quantity' => '50',
            'price' => '1500',
            'producer' => 'NOKIA'
        ];
        $product = new PhoneProduct((int)$data['id'], $data['title'], (int)$data['quantity'],
            (int)$data['price'], $data['producer']);

        $this->assertSame(2, $product->getId());
        $this->assertSame('NOKIA 404', $product->getTitle());
        $this->assertSame(50, $product->getQuantity());
        $this->assertSame(1500, $product->getPrice());
        $this->assertSame('NOKIA', $product->getProducer());
    }

    public function testGetBookInformation(): void
    {
        $data = [
            'id' => '1',
            'title' => 'Learning PHP',
            'quantity' => '30',
            'price' => '500',
            'author' => 'kutlumbek',
        ];
        $product = new BookProduct((int)$data['id'], $data['title'], (int)$data['quantity'], (int)$data['price'],
            $data['author']);

        $this->assertSame('1 Learning PHP 30 500 kutlumbek', $product->getBookInformation());
    }

    public function testGetPhoneInformation(): void
    {
        $data = [
            'id' => '2',
            'title' => 'NOKIA 404',
            'quantity' => '50',
            'price' => '1500',
            'producer' => 'NOKIA'
        ];
        $product = new PhoneProduct((int)$data['id'], $data['title'], (int)$data['quantity'],
            (int)$data['price'], $data['producer']);

        $this->assertSame('2 NOKIA 404 50 1500 NOKIA', $product->getPhoneInformation());
    }

}
