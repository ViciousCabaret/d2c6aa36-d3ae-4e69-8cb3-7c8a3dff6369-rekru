<?php

namespace App\Repository;

use App\Entity\Product;

class ProductRepository implements ProductRepositoryInterface
{
    public function get(string $id): Product
    {
        return new Product($id, 'name', 20.3, 'description', uniqid());
    }

    public function save(Product $product): int
    {
        //zapis w jakims zainjectowanym
        return mt_rand(1, 10);
    }
}