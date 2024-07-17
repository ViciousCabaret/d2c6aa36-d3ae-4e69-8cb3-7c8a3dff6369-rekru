<?php

namespace App\Service\Validator\Rules\LogicRule;

use App\Service\Validator\Exception\ValidationException;
use App\Service\Validator\Rules\ValidatorRuleInterface;
use Closure;

class LetterCountRule implements ValidatorRuleInterface
{
    public function __construct(
        private readonly int $minAmount,
        private readonly int $maxAmount,
    ) {
    }

    public function getRuleDefinition(): Closure
    {
        return function (string $value) {
            if (strlen($value) < $this->minAmount) {
                throw new ValidationException;
            }
            if (strlen($value) > $this->maxAmount) {
                throw new ValidationException;
            }
        };
    }
}