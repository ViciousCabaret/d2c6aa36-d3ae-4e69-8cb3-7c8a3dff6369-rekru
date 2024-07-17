<?php

namespace App\Repository;

use App\Entity\Product;

class InMemoryProductRepository implements ProductRepositoryInterface
{
    private array $products = [];

    public function get(string $id): Product
    {
        // kojarze ze w ddd wszystkie parametry przekazywane do repo i nie tylko sa obiektami, np w tym przypadku byloby ProductID $id, $this->products[$id->value]
        // analogicznie obiekt Product mialby propertiesy jako obiekty, a nie basic typy np ProductDescription, ProductPrice itp itd
        // jako ze nie mam praktycznego doswiadczenia w ddd to robie na basic typach
        return $this->products[$id] ?? throw new \Exception;
    }

    public function save(Product $product)
    {
        $this->products[$product->getProductId()] = $product;
    }
}