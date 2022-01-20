<?php
session_start();

include('./includes/header.php');
?>






<div class="container-fluid">
    <form id="product_form" action="./classes/addHandler.php" method="post">

        <div class="d-flex flex-row">
            <div class="mr-auto p-2">
                <h2>Product Add</h2>
            </div>
            <div class="p-2">
                <button class="btn btn-success" type="submit" name="ADD">Save</button>
            </div>
            <div class="p-2">
                <a class="btn btn-danger" href="/">
                    Cancel
                </a>
            </div>
        </div>

        <div class ="d-flex flex-row">
            <div class="p-2">
                <div class="form-group">
                    <label for="sku">SKU</label>
                    <input type="text" name="value[]" id="sku">
                </div>
    
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="value[]" id="name">
                </div>
    
                <div class="form-group">
                    <label for="price">Price ($)</label>
                    <input type="number" step="1" name="value[]" id="price">
                </div>
    
                <div class="form-group">
                    <label for="">Type Switcher</label>
                    <select name="types" id="productType">
                        <option id="DVD">DVD</option>
                        <option id="Book">Book</option>
                        <option id="Furniture">Furniture</option>
                    </select>
                </div>
    
                <div id="description" class="form-group">
                    <div class="form-group">
                        <label for="size">Size (MB)</label>
                        <input type="number" step="1" name="value[]" id="size">
                    </div>
                    <p><b>Please, provide size in MB</b></p>
                </div>
            </div>

        <?php
        if (isset($_SESSION['message']) and $_SESSION['message'] != NULL) {
            echo '<div class="p-2">';
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert" id="alert">';
            echo $_SESSION['message'];
            echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
            echo '<span aria-hidden="true">&times;</span>';
            echo '</button>';
            echo '</div>';
            echo '</div>';

        }
        session_destroy();
     

        ?>
   </div>
    </form>

</div>


<?php include('./includes/libraries.php')?>
<script src="./js/app.js"></script>
<?php include('./includes/footer.php') ?>

