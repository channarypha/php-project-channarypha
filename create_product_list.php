<?php require_once('partial/header.php'); ?>
<?php require_once('partial/navbar.php'); ?>

<div class="container p-4">

        <div class="d-flex justify-content-end p-3">
            <button class="btn btn-info" onclick="window.history.back();" style="font-size: 20px; padding: 12px">&#8592; Back</button>
        </div>

        <?php

            if(isset($_POST['submit'])){

                // upload image
                $filename = $_FILES['file']['name'];
                $filesize = $_FILES['file']['size'];
                $filetype = $_FILES['file']['type'];
                $tmp_name = $_FILES['file']['tmp_name'];
                $dir = "assets/images/";

                if($filetype != ("image/png" || "image/jpg" || "image/jpeg" || "pdf")){
                    echo "images allowed";

                }else{
                    move_uploaded_file($tmp_name, $dir.$filename);
                }

                // create
                require_once('inc/database.php');
                
                $isCreated = createProductList($_POST);

                if($isCreated){

                    header('Location: index.php?page=products_list');
                }
            }
        ?>

        <form action="#" method="POST" enctype="multipart/form-data">

            <div class="form-group">
                <input type="text" class="form-control" placeholder="Product Name" name="product_name" style="font-size: 20px; margin: auto; width: 50%; padding: 20px">
            </div>

            <div class="form-group">
                <input type="number" class="form-control" placeholder="Brand Id" name="brand_id" style="font-size: 20px; margin: auto; width: 50%; padding: 20px">
            </div>

            <div class="form-group">
                <input type="number" class="form-control" placeholder="Category Id" name="category_id" style="font-size: 20px; margin: auto; width: 50%; padding: 20px"> 
            </div>

            <div class="form-group">
                <input type="number" class="form-control" placeholder="Price" name="price" style="font-size: 20px; margin: auto; width: 50%; padding: 20px">
            </div>

            <div class="form-group">
                <input type="number" class="form-control" placeholder="Discount" name="discount" style="font-size: 20px; margin: auto; width: 50%; padding: 20px">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" placeholder="description" name="discription" style="font-size: 20px; margin: auto; width: 50%; padding: 20px">
            </div>

            <div class="form-group">
                <input type="file" name="file" style="font-size: 20px; margin-left: 25%; width: 50%; padding: 20px">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block" name="submit" style="font-size: 20px; margin: auto; width: 10%; padding: 12px">Create</button>
            </div>
            
        </form>

</div>

<br>
<br>

<?php require_once('partial/footer.php'); ?>