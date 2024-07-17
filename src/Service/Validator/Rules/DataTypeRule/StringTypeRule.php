<?php

namespace App\Service\Validator\Rules\DataTypeRule;

use App\Service\Validator\Exception\ValidationException;
use App\Service\Validator\Rules\ValidatorRuleInterface;

class StringTypeRule implements ValidatorRuleInterface
{
    public function getRuleDefinition(): \Closure
    {
        return function($value) {
            if (!is_string($value)) {
                throw new ValidationException;
            }
        };
    }
}