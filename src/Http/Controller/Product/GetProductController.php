<?php

namespace App\Http\Controller\Product;

use App\Repository\ProductRepositoryInterface;
use App\Service\Transformer\ProductTransformer;
use Framework\Http\ControllerInterface;
use Framework\Http\Request\RequestInterface;

class GetProductController implements ControllerInterface
{
    public function __construct(
        private readonly ProductRepositoryInterface $productRepository,
        private readonly ProductTransformer $productResponseTransformer,
    ) {
    }

    public function execute(RequestInterface $request)
    {
        //tu jako parametr w controllerze dostaje id produktu
        $id = 5;
        //dispatchuje query do ktorej handlera injectowany jest product repo, nie ma obslugi cqrs to robie wszystko tutaj
        $product = $this->productRepository->get($id);

        var_dump($this->productResponseTransformer->transform($product));
    }
}