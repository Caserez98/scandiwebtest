<?php

abstract class Product{

    private $name;
    private $price;


    function __construct( $sku,$name, $price){
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
    }

    public function setSku($sku){
        $this->sku = $sku;
    }

    public function getSku(){
        return $this->sku;
    }

    public function getName() { 
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    abstract public function getDescription();
    abstract public function setDescription();
    abstract public function getDetails();
    abstract public function validateInputs();
}

?>