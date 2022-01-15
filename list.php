<?php 
include './classes/operations.class.php';

$operations = new Operations();
$result = $operations->getProducts();


include('./includes/header.php');


?>

<div class="container-fluid">
    <form method="post" action="./modules/delete.php">
            <div class="d-flex flex-row">
                <div class="mr-auto p-2">
                    <h2>Product List</h2>
                </div>
                <div class="p-2">
                    <a class="btn btn-success" href="/add-product"  name="add">Add</a>
                </div>
                <div class="p-2">
                    <button type="submit" class="btn btn-danger" name="delete">
                        MASS DELETE
                    </button>
    
                </div>
            </div>
    
            <hr>
    
            <div class="row">
    
               
                <?php
                if(!$result==false){
                foreach ($result as $key => $value){
    
                
                    ?>
                    <div class="col-md-2 mt-3">
                        <div class="card text-center bg-light" >
                            <input type="checkbox" value="<?php echo $value['SKU'] ?>" class="delete-checkbox" name="check[]" style="margin-left:0.5rem;margin-top:0.5rem; width:1.5em;height:1.5em">
                            <div class="card-header">
                                <h4 class="card-title">
                                <?php echo $value['SKU']?>

                                </h5>
                            </div>
                            <div class="card-body">
    
                                <h6 class="card-subtitle mb-2 text-muted"><?php echo $value['Name'] ?></h6>
                                <p class="card-text"><?php echo $value['Price'].' $' ?></p>
                                <p class="card-text"><?php echo $value['Description'] ?></p>
                            </div>
    
                        </div>
    
                    </div>
    
                <?php }} ?>
    
    
            </div>
    
    
    
        </form>

</div>


<?php 
include('./includes/libraries.php');
include('./includes/footer.php')?>
