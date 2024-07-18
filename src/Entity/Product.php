<?php

namespace App\Entity;

class Product
{
    public function __construct(
        private string $productId,
        private string $name,
        private int $price,
        private string $description,
        private string $sign
    ) {
    }

    public function getProductId(): string
    {
        return $this->productId;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getSign(): string
    {
        return $this->sign;
    }
}