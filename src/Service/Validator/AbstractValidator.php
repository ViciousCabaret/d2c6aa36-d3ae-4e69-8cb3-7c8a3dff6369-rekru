<?php

namespace App\Service\Validator;

use App\Service\Validator\Exception\ValidationException;
use App\Service\Validator\Rules\ValidatorRuleInterface;

abstract class AbstractValidator implements ValidatorInterface
{
    /**
     * @return ValidatorRuleInterface[]
     */
    abstract protected function getRules(): array;

    public function validate(ValidatableObjectInterface $object): void
    {
        $data = $object->toArray();
        foreach ($this->getRules() as $field => $validatorRules) {
            if (!array_key_exists($field, $data)) {
                throw new ValidationException;
            }
            foreach ($validatorRules as $validatorRule) {
                $function = $validatorRule->getRuleDefinition();
                $function($data[$field]);
            }
        }
    }
}
