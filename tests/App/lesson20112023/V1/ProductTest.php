<?php
declare(strict_types=1);

namespace App\lesson20112023\V1;

use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
//    public function testCreateProduct(): void
//    {
//        $phone = [
//            'id' => 1,
//            'title' => 'nokia 404',
//            'quantity' => '2',
//            'price' => '100',
//            'producer' => 'NOKIA',
//        ];
//        $product = new PhoneProduct((int)$phone['id'], $phone['title'], (int)$phone['price'], (int)$phone['quantity'],
//            $phone['producer']);
//
//        $this->assertEquals(1, $product->getId());
//        $this->assertEquals('nokia 404', $product->getTitle());
//        $this->assertEquals(2, $product->getQuantity());
//        $this->assertEquals(100, $product->getPrice());
//        $this->assertEquals('NOKIA', $product->getProducer());
//    }
//
//    public function testCreateBookProduct(): void
//    {
//        $book = [
//            'id' => 1,
//            'title' => 'Learning PHP',
//            'quantity' => '1',
//            'price' => '250',
//            'author' => 'Ivan Popov',
//        ];
//
//        $product = new Product((int)$book['id'], $book['title'], (int)$book['price'], (int)$book['quantity'], null,
//            $book['author']);
//
//        $this->assertEquals(1, $product->getId());
//        $this->assertEquals('Learning PHP', $product->getTitle());
//        $this->assertEquals(250, $product->getQuantity());
//        $this->assertEquals('NOKIA', $product->getAuthor());
//    }

    public function testCreateBookProductAndPhoneProduct(): void
    {
        $data = [
            'type' => '1',
            'id' => '1',
            'title' => 'Learning PHP',
            'quantity' => '1',
            'price' => '250',
            'producer' => 'Ivan Popov',
        ];
        $product = Product::createNewProduct($data);

        $this->assertInstanceOf(PhoneProduct::class, $product);

        $this->assertSame(1, $product->getId());
        $this->assertSame('Learning PHP', $product->getTitle());
        $this->assertSame('250', $product->getQuantity());
        $this->assertSame('2', $product->getPrice());
    }

}