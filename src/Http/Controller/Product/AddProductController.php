<?php

namespace App\Http\Controller\Product;

use App\DTO\ProductDTO;
use App\Entity\Product;
use App\Repository\ProductRepositoryInterface;
use App\Service\Validator\ValidatorInterface;
use Framework\Http\ControllerInterface;
use Framework\Http\Request\RequestInterface;

class AddProductController implements ControllerInterface
{
    public function __construct(
        private readonly ProductRepositoryInterface $productRepository,
        private readonly ValidatorInterface $validator,
    ) {
    }

    public function execute(RequestInterface $request)
    {
        // (or create from array not sure)
        $productDTO = ProductDTO::createFromRequestData($request->getContent());

        // to jest bardzo simplified bo rzuca wyjatki pojedynczo po kazdym bledzie, ale docelowo mozna zrobic system zwrotki wszystkich bledow na raz
        $this->validator->validate($productDTO);

        //normalnie here dispatchowalbym jakas komende cqrs na dodanie produktu
        //handler w konstruktorze przyjmuje product repository
        //invoke handlera tworzy new Product() z przyjetych danych i wykonuje save na repostiroy
        //w handlerze rowniez wykonywana jest logika zamiany price floata na int i przekazanie dalej do repo
        //jestem swiadomy edge case'ow podczas przyjmowania wartosci we floatach i pozniejszej zamiany na int, ale na ten moment nie testuje ani nie obsluguje wszystkich przypadkow
        $this->productRepository->save(
            new Product(
                rand(1, 10), // generate uuid
                $productDTO->getName(),
                $productDTO->getPrice() * 100,
                $productDTO->getDescription(),
                $productDTO->getSign(),
            ),
        );
    }
}