<?php
require_once('../classes/handler.class.php');
if(isset($_POST['ADD'])){
        $selected = $_POST['types'];
        $arr = array();
        foreach ( $_POST["value"] as $val ) { 
            array_push($arr, $val);
        }
        $handler = new Handler($arr);
        
        call_user_func(array($handler,"create$selected"));
        if(isset($_SESSION['message'])){
            header('Location:../add-product');
        }else{

            header("Location: ../");
            session_unset();
        }
    }



    
?>