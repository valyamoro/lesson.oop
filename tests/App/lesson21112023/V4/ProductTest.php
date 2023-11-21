<?php
declare(strict_types=1);

namespace App\lesson21112023\V4;

use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    public function testCreateBookProduct(): void
    {
        $data = [
            'id' => '1',
            'title' => 'Book',
            'quantity' => '42',
            'price' => '350',
            'author' => 'Author',
        ];
        $product = new BookProduct((int)$data['id'], $data['title'], (int)$data['quantity'], (int)$data['price'], $data['author']);

        $this->assertSame(1, $product->getId());
        $this->assertSame('Book', $product->getTitle());
        $this->assertSame(42, $product->getQuantity());
        $this->assertSame(350, $product->getPrice());
        $this->assertSame('Author', $product->getAuthor());
    }

    public function testCreatePhoneProduct(): void
    {
        $data = [
            'id' => '2',
            'title' => 'Phone',
            'quantity' => '3',
            'price' => '3500',
            'producer' => 'NOKIO',
        ];
        $product = new PhoneProduct((int)$data['id'], $data['title'], (int)$data['quantity'], (int)$data['price'], $data['producer']);

        $this->assertSame(2, $product->getId());
        $this->assertSame('Phone', $product->getTitle());
        $this->assertSame(3, $product->getQuantity());
        $this->assertSame(3500, $product->getPrice());
        $this->assertSame('NOKIO', $product->getProducer());
    }

    public function testCreateNewProduct(): void
    {
        $data = [
            'type' => '2',
            'id' => '2',
            'title' => 'BOOK',
            'quantity' => '3',
            'price' => '3500',
            'author' => 'SAMSUNG',
        ];
        $product = ProductFactory::createNewProduct($data);

        $this->assertInstanceOf(BookProduct::class, $product);

        $this->assertSame(2, $product->getId());
        $this->assertSame('BOOK', $product->getTitle());
        $this->assertSame(3, $product->getQuantity());
        $this->assertSame(3500, $product->getPrice());
        $this->assertSame('SAMSUNG', $product->getAuthor());
    }

    public function testGetInformation(): void
    {
        $data = [
            'type' => 2,
            'id' => '2',
            'title' => 'Learning PHP',
            'quantity' => '10',
            'price' => '30',
            'author' => 'Ivan',
        ];
        $product = ProductFactory::createNewProduct($data);

        $this->assertSame('2 Learning PHP 10 30 Ivan', $product->getInformation());
    }

}
