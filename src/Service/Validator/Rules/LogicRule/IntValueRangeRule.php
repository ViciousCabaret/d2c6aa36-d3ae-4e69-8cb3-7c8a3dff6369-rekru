<?php

namespace App\Service\Validator\Rules\LogicRule;

use App\Service\Validator\Exception\ValidationException;
use App\Service\Validator\Rules\ValidatorRuleInterface;
use Closure;

class IntValueRangeRule implements ValidatorRuleInterface
{
    public function __construct(
        private readonly int $rangeFrom,
        private readonly int $rangeTo,
    ) {
    }

    public function getRuleDefinition(): Closure
    {
        return function($value) {
            if ($value < $this->rangeFrom) {
                throw new ValidationException;
            }
            if ($value > $this->rangeTo) {
                throw new ValidationException;
            }
        };
    }
}