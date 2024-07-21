<?php

namespace App\Provider;

use App\Repository\InMemoryProductRepository;
use App\Repository\ProductRepositoryInterface;
use Framework\DI\ServiceFactoryInterface;

class ProductRepositoryProvider implements ServiceFactoryInterface
{
    public function __invoke(): ProductRepositoryInterface
    {
        // przyklad providera jesli potrzebna by byla jakas grubsza logika zalezna od envow czy czegokolwiek takiego
        // mialem przypadek setowania queue serviceu, ktory w zaleznosci od env korzystal z sqs albo amqp i mocno roznil sie build docelowego serwisu
        return new InMemoryProductRepository();
    }
}