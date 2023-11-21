<?php
declare(strict_types=1);

namespace App\Lesson2\V1;

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
        $product = new PhoneProduct((int)$data['id'], $data['title'], (int)$data['quantity'], (int)$data['price'], $data['producer']);

        $this->assertSame(1, $product->getId());
        $this->assertSame('nokia 404', $product->getTitle());
        $this->assertSame(2, $product->getQuantity());
        $this->assertSame(100, $product->getPrice());
        $this->assertSame('NOKIA', $product->getProducer());
    }

    public function testCreateBookProduct(): void
    {
        $data = [
            'id' => '1',
            'title' => 'Learning PHP',
            'quantity' => '1',
            'price' => '200',
            'author' => 'Ivan Popov',
        ];
        $product = new BookProduct((int)$data['id'], $data['title'], (int)$data['quantity'], (int)$data['price'], $data['author']);

        $this->assertSame(1, $product->getId());
        $this->assertSame('Learning PHP', $product->getTitle());
        $this->assertSame(1, $product->getQuantity());
        $this->assertSame(200, $product->getPrice());
        $this->assertSame('Ivan Popov', $product->getAuthor());
    }

    public function testCreateBookProductAndPhoneProduct(): void
    {
        $data = [
            'type' => '1',
            'id' => '1',
            'title' => 'nokia 404',
            'quantity' => '2',
            'price' => '100',
            'producer' => 'NOKIA',
        ];
        $data = [
            'type' => '2',
            'id' => '1',
            'title' => 'Learning PHP',
            'quantity' => '1',
            'price' => '200',
            'author' => 'Ivan Popov',
        ];

        $product = ProductFactory::createNewProduct($data);

        $this->assertInstanceOf(BookProduct::class, $product);

        $this->assertSame(1, $product->getId());
        $this->assertSame('Learning PHP', $product->getTitle());
        $this->assertSame(1, $product->getQuantity());
        $this->assertSame(200, $product->getPrice());
        $this->assertSame('Ivan Popov', $product->getAuthor());
    }

}
