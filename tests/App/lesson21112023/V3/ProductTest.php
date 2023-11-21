<?php
declare(strict_types=1);

namespace App\lesson21112023\V3;

use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    public function testCreateBookProduct(): void
    {
        $data = [
            'id' => '1',
            'title' => 'Phone number one',
            'quantity' => '30',
            'price' => '350',
            'producer' => 'someName',
        ];
        $product = new PhoneProduct((int)$data['id'], $data['title'], (int)$data['quantity'], (int)$data['price'],
            $data['producer']);

        $this->assertSame(1, $product->getId());
        $this->assertSame('Phone number one', $product->getTitle());
        $this->assertSame(30, $product->getQuantity());
        $this->assertSame(350, $product->getPrice());
        $this->assertSame('someName', $product->getProducer());
    }

    public function testCreatePhoneProduct(): void
    {
        $data = [
            'id' => '2',
            'title' => 'Book number one',
            'quantity' => '40',
            'price' => '100',
            'author' => 'someName',
        ];
        $product = new BookProduct((int)$data['id'], $data['title'], (int)$data['quantity'], (int)$data['price'],
            $data['author']);

        $this->assertSame(2, $product->getId());
        $this->assertSame('Book number one', $product->getTitle());
        $this->assertSame(40, $product->getQuantity());
        $this->assertSame(100, $product->getPrice());
        $this->assertSame('someName', $product->getAuthor());
    }

    public function testCreateProduct(): void
    {
        $data = [
            'type' => '1',
            'id' => '1',
            'title' => 'Samsung M12',
            'quantity' => '42',
            'price' => '12000',
            'producer' => 'Samsung',
        ];
        $product = Product::createNewProduct($data);

        $this->assertInstanceOf(PhoneProduct::class, $product);

        $this->assertSame(1, $product->getId());
        $this->assertSame('Samsung M12', $product->getTitle());
        $this->assertSame(42, $product->getQuantity());
        $this->assertSame(12000, $product->getPrice());
        $this->assertSame('Samsung', $product->getProducer());
    }

    public function testGetBookInformation(): void
    {
        $data = [
            'type' => 2,
            'id' => '2',
            'title' => 'Learning PHP',
            'quantity' => '10',
            'price' => '30',
            'author' => 'Ivan',
        ];
        $product = Product::createNewProduct($data);

        $this->assertSame('2 Learning PHP 10 30 Ivan', $product->getBookInformation());
    }

    public function testGetPhoneInformation(): void
    {
        $data = [
            'type' => '1',
            'id' => '1',
            'title' => 'Samsung M12',
            'quantity' => '42',
            'price' => '12000',
            'producer' => 'Samsung',
        ];
        $product = Product::createNewProduct($data);

        $this->assertSame('1 Samsung M12 42 12000 Samsung', $product->getPhoneInformation());
    }

}
