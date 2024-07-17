<?php

namespace App\Service\Transformer;

interface TransformerInterface
{
    public function transform($object): array;
}