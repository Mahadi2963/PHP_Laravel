<?php

class Product
{
    public $id;
    public $name;
    public $price;


    public function __construct($id, $name, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }


    public function getFormattedPrice()
    {
        $printPrice = sprintf("$%.2f", $this->price);
        return $printPrice;
    }

    public function showDetails()
    {
        echo "Product Details:\n";
        echo "ID: {$this->id}\n";
        echo "Name: {$this->name}\n";
        echo "Price: {$this->getFormattedPrice()}\n";
    }
}


$product = new Product(1, "T-shirt", 19.99);
$product->showDetails();
