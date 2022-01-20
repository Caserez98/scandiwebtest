<?php 
require_once('product.php');

class DVD extends Product{

    private $size;
    private $description;

    public function __construct($sku,$name,$price,$size){
        parent::__construct($sku,$name,$price);
        $this->size = $size;
        $this->setDescription();
        $this->getDetails();

    }

    public function getSize(){
        return $this->size;
    }

    public function setSize($size){
        $this->size = $size;
    }

    public function setDescription(){
        $this->description = 'Size: '.$this->getSize().'MB';
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