<?php

require_once __DIR__ . '/../vendor/autoload.php';

$container = new \Framework\DI\DIContainer();

$container->set(\App\Repository\ProductRepositoryInterface::class, (new \App\Provider\ProductRepositoryProvider())());
$container->set(\App\Service\Validator\Product\AddProductValidator::class, new \App\Service\Validator\Product\AddProductValidator());
$container->set(\App\Service\Transformer\AddProductResponseTransformer::class, new \App\Service\Transformer\AddProductResponseTransformer());

$container->set(\App\Http\Controller\Product\GetProductController::class, new \App\Http\Controller\Product\GetProductController(
    $container->get(\App\Repository\ProductRepositoryInterface::class),
    $container->get(\App\Service\Transformer\AddProductResponseTransformer::class),
));

$container->set(\App\Http\Controller\Product\AddProductController::class, new \App\Http\Controller\Product\AddProductController(
    $container->get(\App\Repository\ProductRepositoryInterface::class),
    $container->get(\App\Service\Validator\Product\AddProductValidator::class),
));

$requestProcessor = new \Framework\Http\Request\RequestProcessor($container);
$container->set(\Framework\Http\Request\RequestProcessorInterface::class, $requestProcessor);
