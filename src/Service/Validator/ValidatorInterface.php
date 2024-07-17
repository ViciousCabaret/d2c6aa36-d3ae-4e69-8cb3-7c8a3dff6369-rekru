<?php

namespace App\Service\Validator;

interface ValidatorInterface
{
    public function validate(ValidatableObjectInterface $object): void;
}