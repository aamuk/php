<?php

echo "<h1><u>OOP</u></h1><p><i>Page <strong>36</strong></i></p><hr>";

class ShopProduct
{
    public function __construct(
        public $title,
        public $firstName = "Bob",
        public $mainName = "",
        public $price = 0
    ) {
    }

    public function getProducer()
    {
        return $this->firstName . " " . $this->mainName;
    }
}

$product1 = new ShopProduct(
    price: 99,
    title: "Orange"

    
    );

 
echo($product1->getProducer());


