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
                
                    <h1 style="color: #FF4848"><?=$product['product_name']?></h1>
                    <br>
                    <h2 style="color: #368B85">upto <?=$product['discount']?> off</h2>
                    
            </div>

            <br>

            </div>

                <h3 class="card-text" style="margin-left: 20%; color: #170055"><?=$product['discription'] ?></h3>
                <br>
                <h3 style="margin-left: 20%; color: #343F56">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</h3>
            
            </div>

            <?php endforeach; ?> 

        </div>
        
<?php require_once('partial/footer.php'); ?>