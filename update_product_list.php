<?php require_once('partial/header.php'); ?>
<?php require_once('partial/navbar.php'); ?>
<div class="container p-4">
        <div class="d-flex justify-content-end p-3">
            <button class="btn btn-info" onclick="window.history.back();" style="font-size: 20px; padding: 12px">&#8592; Back</button>
        </div>
        <?php 
            require_once('inc/database.php');
            $id = $_GET['id'];
            $item = selectOneProduct($id);
            foreach($item as $row):
        ?>
        <form action="update_model_product_list.php" method="POST" >
            <input type="hidden" value="<?= $row['product_id'] ?>" name="product_id">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Product Name" name="product_name" value="<?= $row['product_name'] ?>" style="font-size: 20px; margin: auto; width: 50%; padding: 20px">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Brand Id" name="brand_id" value="<?= $row['brand_id'] ?>" style="font-size: 20px; margin: auto; width: 50%; padding: 20px">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Category Id" name="category_id" value="<?= $row['category_id'] ?>" style="font-size: 20px; margin: auto; width: 50%; padding: 20px">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Price" name="price" value="<?= $row['price'] ?>" style="font-size: 20px; margin: auto; width: 50%; padding: 20px">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Discount" name="discount" value="<?= $row['discount'] ?>" style="font-size: 20px; margin: auto; width: 50%; padding: 20px">
            </div>
            <div class="form-group">
                <input type="hidden" value="<?= $product['image'] ?> "  name="image">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Description" name="discription" value="<?= $row['discription'] ?>" style="font-size: 20px; margin: auto; width: 50%; padding: 20px">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block" style="font-size: 20px; margin: auto; width: 10%; padding: 12px">Update</button>
            </div>
        </form>
        <?php endforeach; ?>
</div>
<?php require_once('partial/footer.php'); ?>