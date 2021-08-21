<?php require_once('partial/header.php'); ?>
<?php require_once('partial/navbar.php'); ?>
<div class="container p-4">
        <div class="d-flex justify-content-end p-3">
            <button class="btn btn-info" onclick="window.history.back();">&#8592; Back</button>
        </div>
        <?php
            if(isset($_POST['submit'])){
                $filename = $_FILES['file']['name'];
                $filesize = $_FILES['file']['size'];
                $filetype = $_FILES['file']['type'];
                $tmp_name = $_FILES['file']['tmp_name'];
                $dir = "assets/images/";

                if($filetype != ("image/png" || "image/jpg" || "image/jpeg" || "pdf")){
                    echo "Only JPG images allowed";

                }else{
                    move_uploaded_file($tmp_name,$dir.$filename);
                }
                require_once('inc/database.php');
                $isCreated = createProductList($_POST);

                if($isCreated){
                    header('Location: index.php?page=products_list');
                }
            }
        ?>
        <form action="#" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Product Name" name="product_name">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Brand Id" name="brand_id">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Category Id" name="category_id">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Price" name="price">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Discount" name="discount">
            </div>
            <div class="form-group">
                <input type="file" name="file">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block" name="submit">Create</button>
            </div>
        </form>
</div>
<?php require_once('partial/footer.php'); ?>