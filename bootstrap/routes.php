<?php

use App\Http\Controller\Product\AddProductController;
use App\Http\Controller\Product\GetProductController;
use Framework\App\App;

// normalnie tutaj byloby /product/{id} ale implementuje bardziej zaawansowanej obslugi patternow

/** @var $app App */
$app->get('/product', GetProductController::class);
$app->post('/product', AddProductController::class);