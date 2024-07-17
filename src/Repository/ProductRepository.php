<?php

namespace App\Repository;

use App\Entity\Product;

class ProductRepository implements ProductRepositoryInterface
{
    public function get(string $productId): Product
    {
        return new Product($productId, 'name', 20.3, 'description', uniqid());
    }

    public function save(Product $product): int
    {
        return mt_rand(1, 10);
    }
}