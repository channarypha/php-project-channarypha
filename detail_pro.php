<?php require_once('partial/header.php'); ?>
<?php require_once('partial/navbar.php'); ?>
    <div class="container p-4">
    <div class="container mt-3 p-3">
    <div class="d-flex justify-content-end p-3">
    <button class="btn btn-info" onclick="window.history.back();" style="font-size: 20px; padding: 12px">&#8592; Back</button>
    </div style="margin: auto;">
        <?php
            require_once('inc/database.php');
            $id = $_GET['id'];
            $products= selectOneProduct($id);
            
            foreach ($products as $product):
               
                
        ?>
        <div class="banner">
            <div class="content" style="margin-left: 20%;">
                <img src="assets/images/<?=$product['image'] ?>" style="width: 40%; height: 40%;margin-left: 10%">
            
            
                <h1><?=$product['product_name']?></h1>
                <br>
                <h2>upto <?=$product['discount']?> off</h2>
                
        </div>
        <br>
        </div>
            <h3 class="card-text" style="margin-left: 20%"><?=$product['discription'] ?></h3>
        </div>

        <?php endforeach; ?> 
    </div>
    
<?php require_once('partial/footer.php'); ?>