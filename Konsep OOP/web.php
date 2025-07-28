<?php
class Product
{
    public $name;
    public $price;
    public $description;

    public function __construct($name, $price, $description)
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
    }    
}

$product1 = new Product('Smartphone', 5000000, 'Smartphone terbaru dengan kamera berkualitas tinggi');
$product2 = new Product('Realme', 4000000, 'Smartphone terbaru dengan build quality terbaik');
