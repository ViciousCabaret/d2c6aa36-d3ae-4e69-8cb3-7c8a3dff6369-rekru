<?php

namespace Framework\DI;

use Framework\DI\Exception\ServiceAlreadyDeclaredException;
use Framework\DI\Exception\ServiceNotDeclaredException;

class DIContainer
{
    private array $services = [];

    public function set(string $className, $instance): void
    {
        if (true === array_key_exists($className, $this->services)) {
            throw new ServiceAlreadyDeclaredException();
        }

        $this->services[$className] = $instance;
    }

    public function get(string $className): object
    {
        if (false === array_key_exists($className, $this->services)) {
            throw new ServiceNotDeclaredException();
        }

        return $this->services[$className];
    }
}