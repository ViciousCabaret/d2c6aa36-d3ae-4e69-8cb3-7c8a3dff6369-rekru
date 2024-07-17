<?php

namespace App\Provider;

use App\Repository\ProductRepository;
use App\Repository\ProductRepositoryInterface;
use Framework\DI\ServiceFactoryInterface;

class ProductRepositoryProvider implements ServiceFactoryInterface
{
    public function __invoke(): ProductRepositoryInterface
    {
        return new ProductRepository();
    }
}