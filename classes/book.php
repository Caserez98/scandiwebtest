<?php
require_once('product.php');

class Book extends Product{

    private $weight;
    private $description;

    public function __construct($sku,$name,$price,$weight){
        parent::__construct($sku,$name,$price);
        $this->weight = $weight;
        $this->setDescription();
        $this->getDetails();

    }

    public function getWeight(){
        return $this->weight;
    }

    public function setWeight($weight){
        $this->weight = $weight;
    }

    public function setDescription(){
        $this->description = 'Weight: '.$this->getWeight().'KG';
    }

    public function getDescription(){
        return $this->description;
    }

    public function getDetails()
    {
        echo $this->getName().'<br />';
        echo $this->getPrice().'<br />';
        echo $this->getDescription().'<br />';
    }

    public function validateInputs(){
        $sku=$this->getSku();
        $name=$this->getName();
        $price=$this->getPrice();
        $weight=$this->getWeight();

        $inputs = array();
        $fields = array(
            "SKU" => $sku,
            "Name" => $name,
            "Price" => $price,
            "Weight" => $weight
        );
        foreach($fields as $key => $value){
            if(empty($value)){             
                array_push($inputs,"$key field empty <br/>");  
            }
        }
        return $inputs;
        
    }

}

?>