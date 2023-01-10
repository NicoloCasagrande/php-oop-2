<?php

class Product{
    public $name;
    public $description;
    public $price;
    public $category;

    public function setPrice($_price){
        $this->price = $_price;
    }
}