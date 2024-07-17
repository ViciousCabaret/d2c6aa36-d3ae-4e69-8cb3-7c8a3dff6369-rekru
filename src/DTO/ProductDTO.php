<?php

namespace App\DTO;

use App\Service\Validator\ValidatableObjectInterface;
use Exception;

class ProductDTO implements ValidatableObjectInterface
{
    public function __construct(
        private readonly string $productId,
        private readonly string $name,
        private readonly int $price,
        private readonly string $description,
        private readonly string $sign,
    ) {
    }

    public function getProductId(): string
    {
        return $this->productId;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): int
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

    public static function createFromRequest(array $data): self
    {
        if (
            !array_key_exists('name', $data)
            || !array_key_exists('price', $data)
            || !array_key_exists('description', $data)
        ) {
            throw new Exception;
        }

        return new self(
            rand(0, 10),
            $data['name'],
            $data['price'],
            $data['description'],
            '',
        );
    }
}