<?php

class Product{
    public $name;
    public $description;
    public $price;
    public $category;

    public function __construct(string $name, float $price, array $categories){
        $this->name = $name;
        $this->price = $price;
        $this->category = $categories;
    }

    public function setPrice($_price){
        $this->price = $_price;
    }
}