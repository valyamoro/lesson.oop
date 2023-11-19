<?php

namespace App\lesson19112023\V3;

use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    public function test()
    {
        $product = new Product('product_name', 42, 500, 350);

        $this->assertSame('product_name', $product->getTitle());
        $this->assertSame(42, $product->getQuality());
        $this->assertSame(500, $product->getPrice());
        $this->assertSame(350, $product->getSalePrice());
    }
}
