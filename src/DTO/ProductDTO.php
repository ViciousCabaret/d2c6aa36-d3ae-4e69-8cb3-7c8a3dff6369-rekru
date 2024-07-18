<?php

namespace App\DTO;

use App\Service\Validator\ValidatableObjectInterface;
use Exception;

class ProductDTO implements ValidatableObjectInterface
{
    public function __construct(
        private readonly string $name,
        private readonly float $price,
        private readonly string $description,
        private readonly string $sign,
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getSign(): string
    {
        return $this->sign;
    }

    public function toArray(): array
    {
        return get_object_vars($this);
    }

    public static function createFromRequestData(array $data): self
    {
        if (
            !array_key_exists('name', $data)
            || !array_key_exists('price', $data)
            || !array_key_exists('description', $data)
        ) {
            throw new Exception;
        }

        return new self(
            $data['name'],
            $data['price'],
            $data['description'],
            '',
        );
    }
}