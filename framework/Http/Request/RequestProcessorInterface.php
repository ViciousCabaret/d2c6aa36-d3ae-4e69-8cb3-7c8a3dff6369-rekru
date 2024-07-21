<?php

namespace Framework\Http\Request;

interface RequestProcessorInterface
{
    public function process(): void;

    public function registerPath(
        string $method,
        string $path,
        string $class,
    ): void;
}