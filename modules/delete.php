<?php
require_once '../classes/operations.class.php';
$operations = new Operations();
if(isset($_POST['delete'])){
    if(is_array($_POST['check'])){
        $checkbox = $_POST['check'];
        if(count($checkbox) > 0){
            for($i=0;$i<count($checkbox);$i++){ 
        
                $del_id=$checkbox[$i];
                $operations->deleteProduct($del_id);
    
            };
        }
    }
    
    header("Location:../");
}

?>