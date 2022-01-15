<?php
include '../classes/dvd.class.php';
include '../classes/operations.class.php';
include '../classes/book.class.php';
include '../classes/furniture.class.php';


session_start();

class Handler extends Operations
{

    protected $data = array();
    public function __construct($data)
    {
        foreach ($data as $key) {
            array_push($this->data, $key);
        }
    }

    public function getData()
    {
        return $this->data;
    }

    public function createDVD()
    {
        $data = $this->getData();
        $dvd = new \DVD($data[0], $data[1], $data[2], $data[3]);


        $validate = $dvd->validation();
        
        $operations = new Operations();
        $sku = $dvd->getSku();
        $sku = $dvd->getSku();
        $name = $dvd->getName();
        $price = $dvd->getPrice();
        $description = $dvd->getDescription();
        
        $duplicatedSKU = $operations->getSku($sku);

        if(empty($validate)){
            if($duplicatedSKU==0){

        
                $operations->addProduct($sku, $name, $price, $description);
                session_unset();
            }else{
                $_SESSION['message'] = "SKU duplicated, please try other";
            }

        }else{
            if($duplicatedSKU==0){
                $_SESSION['message'] = implode("\n", $validate);
            }
            else{
                array_unshift($validate,"SKU Duplicated, please try other <br/>");
                $_SESSION['message'] =implode("\n", $validate);
            }
        }

    }

    public function createBook()
    {
        $data = $this->getData();
        $book = new \Book($data[0], $data[1], $data[2], $data[3]);
        $sku = $book->getSku();
        $name = $book->getName();
        $price = $book->getPrice();
        $description = $book->getDescription();
        $validate = $book->validation();
        $operations = new Operations();
        $duplicatedSKU = $operations->getSku($sku);

        if(empty($validate)){
            if($duplicatedSKU==0){
                $operations->addProduct($sku, $name, $price, $description);
                session_unset();
            }else{
                $_SESSION['message'] = "SKU duplicated, please try other";
  
            }

        }else{
            if($duplicatedSKU==0){
                $_SESSION['message'] = implode("\n", $validate);
            }
            else{
                array_unshift($validate,"SKU duplicated, please try other <br/>");
                $_SESSION['message'] = implode("\n", $validate);

            }

        }
        }

    public function createFurniture()
    {
        $data = $this->getData();
        $furniture = new \Furniture($data[0], $data[1], $data[2], $data[3], $data[4], $data[5]);
        $sku = $furniture->getSku();
        $name = $furniture->getName();
        $price = $furniture->getPrice();
        $description = $furniture->getDescription();
        $validate = $furniture->validation();
        $operations = new Operations();
        $duplicatedSKU = $operations->getSku($sku);

        if(empty($validate)){
            if($duplicatedSKU==0){
                $operations->addProduct($sku, $name, $price, $description);
                session_unset();
            }else{
                $_SESSION['message'] = "SKU duplicated, please try other";

            }

        }else{
            if($duplicatedSKU==0){
                $_SESSION['message'] = implode("\n", $validate);
            }
            else{
                array_unshift($validate,"SKU duplicated, please try other <br/>");
                $_SESSION['message'] = implode("\n", $validate);

            }

        }
    }
}
