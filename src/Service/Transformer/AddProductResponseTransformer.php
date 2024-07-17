<?php

namespace App\Service\Transformer;

use App\Entity\Product;

class AddProductResponseTransformer
{
    public function transform(Product $product): array
    {
        return [
            'productId' => $product->getProductId(),
            'name' => strtoupper($product->getName()),
            'price' => sprintf('%sPLN', number_format($product->getPrice(), 2, '.', ' ')),
            'description' => sprintf(
                "%s\nSygnatura: %s",
                $product->getDescription(),
                $product->getSign()
            ),
        ];
    }
}