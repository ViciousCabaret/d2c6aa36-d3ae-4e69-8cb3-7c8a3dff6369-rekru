<?php

namespace App\Http\Controller\Product;

use App\Repository\ProductRepositoryInterface;
use App\Service\Validator\ValidatorInterface;
use Framework\Http\ControllerInterface;
use Framework\Http\Request\RequestInterface;

class GetProductController implements ControllerInterface
{
    public function __construct(
        private readonly ProductRepositoryInterface $productRepository,
        private readonly ValidatorInterface $validator,
    ) {
    }

    public function execute(RequestInterface $request)
    {
        var_dump("ASD from controller ello");
    }
}