<?php
include_once 'database.class.php';

class Operations extends Database{
    
	public function __construct()
	{
		parent::__construct();
	}

    public function getSKU($sku){
        $query= "SELECT * FROM products WHERE SKU='$sku'";
        $result = $this->conn->query($query);

        if($result->num_rows>0) {
            return true;
        }else{
            return false;
        }

    }

    public function getProducts(){
        $query = "SELECT * FROM products";
        $result = $this->conn->query($query);

        if($result->num_rows>0){
            $rows = array();
            
            while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }
            return $rows;
        }else{
            return false;
        }
		
    }

    public function deleteProduct($sku){
        $query = "Delete from products where SKU = '$sku'";
        $result = $this->conn->query($query);
        if($result==false) {
            return false;
        }else{
            return true;
        }


    }

    public function addProduct($sku,$name,$price,$description){
        $query = "Insert into products (sku,name,price,description) values ('$sku','$name','$price','$description')";
        $result = $this->conn->query($query);
        if($result==false) {
            return false;
        }else{
            return true;
        }

    }




}

?>