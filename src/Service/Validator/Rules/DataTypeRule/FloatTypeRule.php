<?php

namespace App\Service\Validator\Rules\DataTypeRule;

use App\Service\Validator\Exception\ValidationException;
use App\Service\Validator\Rules\ValidatorRuleInterface;
use Closure;

class FloatTypeRule implements ValidatorRuleInterface
{
    public function getRuleDefinition(): Closure
    {
        return function($value) {
            if (!is_float($value)) {
                throw new ValidationException;
            }
        };
    }
}