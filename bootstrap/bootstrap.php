<?php

require_once __DIR__ . '/../vendor/autoload.php';

$container = new \Framework\DI\DIContainer();

$container->set(\App\Repository\ProductRepositoryInterface::class, (new \App\Provider\ProductRepositoryProvider())());
$container->set(\App\Service\Validator\Product\AddProductValidator::class, new \App\Service\Validator\Product\AddProductValidator());

$container->set(\App\Http\Controller\Product\GetProductController::class, new \App\Http\Controller\Product\GetProductController(
    $container->get(\App\Repository\ProductRepositoryInterface::class),
));

$requestProcessor = new \Framework\Http\Request\RequestProcessor($container);
$container->set(\Framework\Http\Request\RequestProcessorInterface::class, $requestProcessor);
