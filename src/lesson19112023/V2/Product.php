<?php

namespace App\lesson19112023\V2;

class Product
{
    private string $title;
    private int $quality;
    private int $price;
    private int $salePrice;

    public function setTitle(string $value): void
    {
        $this->title = $value;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setQuality(int $value): void
    {
        $this->quality = $value;
    }

    public function getQuality(): int
    {
        return $this->quality;
    }

    public function setPrice(int $value): void
    {
        $this->price = $value;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function setSalePrice(int $value): void
    {
        $this->salePrice = $value;
    }

    public function getSalePrice(): int
    {
        return $this->salePrice;
    }
}
