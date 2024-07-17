<?php

namespace App\Entity;

class Product
{
    private string $productId;
    private string $name;
    private int $price;
    private string $description;
    private string $sign;

    public function __construct(
        string $productId,
        string $name,
        int $price,
        string $description,
        string $sign
    ) {
        $this->productId = $productId;
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->sign = $sign;
    }

    /**
     * @return mixed
     */
    public function productId()
    {
        return $this->productId;
    }

    /**
     * @return mixed
     */
    public function name()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function price()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function description()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function sign()
    {
        return $this->sign;
    }


}