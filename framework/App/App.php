<?php

namespace Framework\App;

use Framework\Http\Request\RequestProcessorInterface;

class App implements AppInterface
{
    public function __construct(
        private readonly RequestProcessorInterface $requestProcessor,
    ) {
    }

    public function run(): void
    {
        $this->requestProcessor->process();
    }

    public function get(string $path, string $class): void
    {
        $this->requestProcessor->registerPath('GET', $path, $class);
    }

    public function post(string $path, string $class): void
    {
        $this->requestProcessor->registerPath('POST', $path, $class);
    }
}