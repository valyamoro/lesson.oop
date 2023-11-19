<?php

namespace App\lesson19112023\V3;

class Product
{
    private string $title;
    private int $quality;
    private int $price;
    private int $salePrice;

    public function __construct(string $title, int $quality, int $price, int $salePrice)
    {
        $this->title = $title;
        $this->quality = $quality;
        $this->price = $price;
        $this->salePrice = $salePrice;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getQuality(): int
    {
        return $this->quality;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function getSalePrice(): int
    {
        return $this->salePrice;
    }
}
