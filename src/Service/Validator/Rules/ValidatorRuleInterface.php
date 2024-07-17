<?php

namespace App\Service\Validator\Rules;

use Closure;

interface ValidatorRuleInterface
{
    public function getRuleDefinition(): Closure;
}