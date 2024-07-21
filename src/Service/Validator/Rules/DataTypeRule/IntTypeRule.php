<?php

namespace App\Service\Validator\Rules\DataTypeRule;

use App\Service\Validator\Exception\ValidationException;
use App\Service\Validator\Rules\ValidatorRuleInterface;
use Closure;

class IntTypeRule implements ValidatorRuleInterface
{
    public function getRuleDefinition(): Closure
    {
        return function($value) {
            if (!is_int($value)) {
                throw new ValidationException;
            }
        };
    }
}