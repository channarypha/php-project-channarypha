<?php require_once('../partial/header.php'); ?>
<?php require_once('../partial/navbar.php'); ?>
<div class="container p-4">
        <form action="create_model_product_list.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Product Id" name="product_id">
            </div>
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
            <div action="upload.php" class="form-group">
                <input type="file" class="form-control" placeholder="Choose file" name="image">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Create</button>
            </div>
        </form>
</div>
<?php require_once('../partial/footer.php'); ?>