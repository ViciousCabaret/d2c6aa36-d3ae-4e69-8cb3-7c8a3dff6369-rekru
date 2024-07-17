<?php

namespace App\Service\Validator\Product;

use App\Service\Validator\AbstractValidator;
use App\Service\Validator\Rules\DataTypeRule\IntTypeRule;
use App\Service\Validator\Rules\DataTypeRule\StringTypeRule;
use App\Service\Validator\Rules\LogicRule\LetterCountRule;

class AddProductValidator extends AbstractValidator
{
    protected function getRules(): array
    {
        return [
            'name' => [
                new StringTypeRule(),
                new LetterCountRule(2, 21),
            ],
            'price' => [
                new IntTypeRule(),
            ],
            'description' => [
                new StringTypeRule(),
                new LetterCountRule(-1, 101),
            ],
        ];
    }
}