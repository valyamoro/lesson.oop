<?php
declare(strict_types=1);

namespace App\lesson19112023\V1;

use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    public function test(): void
    {
        $product = new Product();

        $product->title = 'product_name';
        $product->quantity = 42;
        $product->price = 500;
        $product->salePrice = 350;

        $this->assertSame('product_name', $product->title);
        $this->assertSame(42, $product->quantity);
        $this->assertSame(500, $product->price);
        $this->assertSame(350, $product->salePrice);
    }
}
