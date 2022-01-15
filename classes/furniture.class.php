<?php
require_once('product.class.php');

class Furniture extends Products{

    private $height;
    private $width;
    private $length;
    private $description;

    public function __construct($sku,$name,$price,$height,$width,$length){
        parent::__construct($sku,$name,$price);
        $this->height =$height;
        $this->width =$width;
        $this->length =$length;
        $this->setDescription();

    }

    public function setHeight($height){
        $this->height = $height;
    }

    public function setWidth($width){
        $this->width = $width;
    }

    public function setLength($length){
        $this->length = $length;
    }

    public function getHeight(){
        return $this->height;
    }

    public function getWidth(){
        return $this->width;
    }

    public function getLength(){
        return $this->length;
    }

    public function setDescription(){
        $this->description = "Dimension: " .$this->getHeight() . " x " . $this->getWidth()." x " . $this->getLength();
    }

    public function getDescription(){
        return $this->description;
    }

    public function validation(){
        $sku=$this->getSKU();
        $name=$this->getName();
        $price=$this->getPrice();
        $height=$this->getHeight();
        $width=$this->getWidth();
        $length=$this->getLength();

        $inputs = array();
        $fields = array(
            "SKU" => $sku,
            "Name" => $name,
            "Price" => $price,
            "Height" => $height,
            "Width" => $width,
            "Length" => $length
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