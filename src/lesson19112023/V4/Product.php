<?php

namespace App\lesson19112023\V4;

class Product
{
    public function __construct(
        private string $title,
        private int $quality,
        private int $price,
        private int $salePrice,
    ) {}
}
