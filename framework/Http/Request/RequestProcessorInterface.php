<?php

namespace Framework\Http\Request;

interface RequestProcessorInterface
{
    public function process(): void;
}