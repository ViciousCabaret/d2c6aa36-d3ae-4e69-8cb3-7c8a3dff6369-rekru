<?php

namespace App\Http\Controller;

class MainController
{
    public function process()
    {
        $path = explode('/', $_SERVER['REQUEST_URI']);

        switch ($path[1]) {
            case '':
                echo 'Home page';
                break;
            case 'product':
                if ($_POST && $_POST['action'] === 'add') {
                    $productRepository = new \Repository\ProductRepository();
                    $productId = $productRepository->save('name', 20.3, 'description');
                    echo 'Product added';
                } else {
                    $productId = $path[2];
                    $productRepository = new \Repository\ProductRepository();
                    $product = $productRepository->get($productId);
                    print_r($product);
                    echo 'Product page';
                }
                break;
            default:
                header("HTTP/1.0 404 Not Found", 404);
                exit;
        }
    }
}