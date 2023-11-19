<?php

namespace App\lesson19112023\V2;

use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    public function test()
    {
        $product = new Product;

        $product->setTitle('product_name');
        $product->setQuality(42);
        $product->setPrice(500);
        $product->setSalePrice(350);

        $this->assertSame('product_name', $product->getTitle());
        $this->assertSame(42, $product->getQuality());
        $this->assertSame(500, $product->getPrice());
        $this->assertSame(350, $product->getSalePrice());
    }
}
