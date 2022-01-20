<?php
include '../classes/operations.php';

class Delete extends Operations{

    protected $chekboxes;

    public function __construct(){
        if(is_array($_POST['check'])){
            $this->chekboxes = $_POST['check'];
            $this->delete();

        }
        header("Location: ../");

    }

    public function getChekboxes(){
        return $this->chekboxes;
    }

    public function delete(){
        $operations = new Operations();
        $skus = $this->getChekboxes();
        if(count($skus)>0){
            for($i=0;$i<count($skus);$i++){
                $del_id=$skus[$i];
                $operations->deleteProduct($del_id);

            }
        }
    }
}
$deleteHandler = new Delete();

?>