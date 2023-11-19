<?php

namespace App\lesson19112023\V4;

use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    public function test()
    {
        $product = new Product('product_name', 42, 500, 350);

        $this->assertSame('product_name', $product->title);
        $this->assertSame(42, $product->quality);
        $this->assertSame(500, $product->price);
        $this->assertSame(350, $product->salePrice);
    }
}