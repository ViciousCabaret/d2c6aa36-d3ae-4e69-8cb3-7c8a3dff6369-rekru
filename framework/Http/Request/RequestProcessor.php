<?php

namespace Framework\Http\Request;

use Exception;
use Framework\DI\DIContainer;
use Framework\Http\ControllerInterface;
use ReflectionClass;

class RequestProcessor implements RequestProcessorInterface
{
    public function __construct(
        private readonly DIContainer $container,
    ) {
    }

    private array $registeredPaths = [];

    public function process(): void
    {
        $requestUri = $_SERVER['REQUEST_URI'];
        $requestMethod = $_SERVER['REQUEST_METHOD'];

        if (
            !array_key_exists($requestUri, $this->registeredPaths)
            || !array_key_exists($requestMethod, $this->registeredPaths[$requestUri])
        ) {
            header("HTTP/1.0 404 Not Found", 404);
            exit;
        }

        /** @var ControllerInterface $controller */
        $controller = $this->container->get($this->registeredPaths[$requestUri][$requestMethod]);

        $controller->execute(new Request());
    }

    public function registerPath(string $method, string $path, string $class): void
    {
        $reflectionClass = new ReflectionClass($class);
        if (!$reflectionClass->implementsInterface(ControllerInterface::class)) {
            throw new Exception(); //no interface implemented bla bla
        }

        $this->registeredPaths[$path][$method] = $class;
    }
}