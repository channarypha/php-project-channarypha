<?php require_once('../partial/header.php'); ?>
<?php require_once('../partial/navbar.php'); ?>
<div class="container p-4">
        <?php 
            require_once('../inc/database.php');
            $id = $_GET['id'];
            $item = selectOneProduct($id);
            foreach($item as $row):
        ?>
        <form action="update_model_product_list.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <input type="number" value="<?=$row['product_id']?>" class="form-control" placeholder="Product Id" name="product_id">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Product Name" name="product_name" value="<?= $row['product_name'] ?>">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Brand Id" name="brand_id" value="<?= $row['brand_id'] ?>">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Category Id" name="category_id" value="<?= $row['category_id'] ?>">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Price" name="price" value="<?= $row['price'] ?>">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Discount" name="discount" value="<?= $row['discount'] ?>">
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Create</button>
            </div>
        </form>
        <?php endforeach; ?>
</div>
<?php require_once('../partial/footer.php'); ?>