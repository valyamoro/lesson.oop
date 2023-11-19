<?php

namespace App\lesson19112023\V4;

class Product
{
    public function __construct(
        public string $title,
        public int $quality,
        public int $price,
        public int $salePrice,
    ) {}
}
