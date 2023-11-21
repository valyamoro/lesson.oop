<?php
declare(strict_types=1);

namespace App\lesson21112023\V1;

use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    public function testCreatePhoneProduct(): void
    {
        $data = [
            'id' => '1',
            'title' => 'nokia 404',
            'quantity' => '2',
            'price' => '100',
            'producer' => 'NOKIA',
        ];
        $product = new Product((int)$data['id'], $data['title'], (int)$data['quantity'], (int)$data['price'], $data['producer'], null);

        $this->assertSame(1, $product->getId());
        $this->assertSame('nokia 404', $product->getTitle());
        $this->assertSame(2, $product->getQuantity());
        $this->assertSame(100, $product->getPrice());
        $this->assertSame('NOKIA', $product->getProducer());
    }

    public function testCreateBookProduct(): void
    {
        $data = [
            'id' => '2',
            'title' => 'Learning PHP',
            'quantity' => '10',
            'price' => '30',
            'author' => 'Ivan',
        ];
        $product = new Product((int)$data['id'], $data['title'], (int)$data['quantity'], (int)$data['price'], null, $data['author']);

        $this->assertSame(2, $product->getId());
        $this->assertSame('Learning PHP', $product->getTitle());
        $this->assertSame(10, $product->getQuantity());
        $this->assertSame(30, $product->getPrice());
        $this->assertSame('Ivan', $product->getAuthor());
    }

    public function testGetPhoneInformation(): void
    {
        $data = [
            'id' => '1',
            'title' => 'nokia 404',
            'quantity' => '2',
            'price' => '100',
            'producer' => 'NOKIA',
        ];
        $product = new Product((int)$data['id'], $data['title'], (int)$data['quantity'], (int)$data['price'], $data['producer'], null);

        $this->assertSame('1 nokia 404 2 100 NOKIA', $product->getPhoneInformation());
    }

    public function testGetBookInformation(): void
    {
        $data = [
            'id' => '2',
            'title' => 'Learning PHP',
            'quantity' => '10',
            'price' => '30',
            'author' => 'Ivan',
        ];
        $product = new Product((int)$data['id'], $data['title'], (int)$data['quantity'], (int)$data['price'], null, $data['author']);

        $this->assertSame('2 Learning PHP 10 30 Ivan', $product->getBookInformation());
    }

}
