<?php

require_once('book.php');
require_once('dvd.php');
require_once('furniture.php');
include '../classes/operations.php';
session_start();
class Add extends Operations{


    protected $data = array();
    protected $type;
    public function __construct()
    {

        foreach ($_POST["value"] as $val){
            array_push($this->data, $val);
        }
        $this->type = isset($_POST['types']) ? $_POST['types'] :null;
        $this->createProduct();
    }

    public function getData()
    {
        return $this->data;
    }

    public function getType(){
        return $this->type;
    }

    public function createProduct(){
        $object = new $this->type(...$this->data);
        $operations = new Operations();

        $validateInputs=$this->validate($object);
        $duplicated = $this->checkDuplicated($object, $operations);
        if(empty($validateInputs)){
            if($duplicated==0){
                $operations->addProduct(...$this->data);
                header("Location: ../");
                session_unset();

            }else{
                $_SESSION['message']= "SKU duplicated, pleae try other";
                header("Location: ../add-product");

            }
        }else{
            if($duplicated==0){
                $_SESSION['message'] = implode("\n", $validateInputs);

            }
            else{
                array_unshift($validate,"SKU Duplicated, please try other <br/>");
                $_SESSION['message'] =implode("\n", $validateInputs);
            }
            header("Location: ../add-product");

        }

    }

    public function validate($object){
        return $object->validateInputs();

    }

    public function checkDuplicated($object,$operations){
        $sku = $object->getSku();
        return $operations->getSku($sku);
    }


}
$addHandler = new Add();

?>