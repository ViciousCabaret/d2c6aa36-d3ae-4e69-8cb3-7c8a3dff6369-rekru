<?php

namespace App\Repository;

use App\Entity\Product;

interface ProductRepositoryInterface
{
    public function get(string $id): Product;
    public function save(Product $product);
}
