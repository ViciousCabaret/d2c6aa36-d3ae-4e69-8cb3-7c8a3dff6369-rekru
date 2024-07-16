<?php

namespace Repository;

class ProductRepository
{
    public function get($productId): Product
    {
        return new Product(1, 'name', 20.3, 'description', uniqid());
    }

    public function save(string $name, float $price, string $description): int
    {
        return mt_rand(1, 10);
    }
}