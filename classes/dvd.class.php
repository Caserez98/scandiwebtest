<?php

require_once('product.class.php');

class DVD extends Products{
    private $size;
    private $description;
    public function __construct($sku,$name,$price,$size){
        parent::__construct($sku,$name,$price);
        $this->size =$size;
        $this->setDescription();

    }

    public function setSize($size){
        $this->size = $size;
    }

    public function getSize(){
        return $this->size;
    }

    public function setDescription(){
        $this->description= 'Size: '. $this->getSize().'MB';
    }
   
    public function getDescription(){
        return $this->description;
    }
    public function validation(){
        $sku=$this->getSKU();
        $name=$this->getName();
        $price=$this->getPrice();
        $size=$this->getSize();

        $inputs = array();
        $fields = array(
            "SKU" => $sku,
            "Name" => $name,
            "Price" => $price,
            "Size" => $size
        );

        foreach($fields as $key => $value){
            if(empty($value)){             
                array_push($inputs,"$key field required <br/>");
            }
        }
        return $inputs;
        
    }


}

?>