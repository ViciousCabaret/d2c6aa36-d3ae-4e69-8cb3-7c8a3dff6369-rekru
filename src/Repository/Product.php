<?php

namespace Repository;

class Product
{
    private $productId;
    private $name;
    private $price;
    private $description;
    private $sign;

    public function __construct($productId, $name, $price, $description, $sign)
    {
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