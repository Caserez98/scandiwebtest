<?php

require_once('product.class.php');
class Book extends Products{
    private $weight;
    private $description;
    public function __construct($sku,$name,$price,$weight){
        parent::__construct($sku,$name,$price);
        $this->weight =$weight;
        $this->setDescription();
    }

    public function getWeight(){
        return $this->weight;
    }

    public function setWeight($weight){
        $this->weight = $weight;
    }


    public function setDescription(){
        $this->description= 'Weight: '. $this->getWeight().'KG';
    }
   
    public function getDescription(){
        return $this->description;
    }


    public function validation(){
        $sku=$this->getSKU();
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