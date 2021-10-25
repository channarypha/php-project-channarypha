<section class="banner-container" method="post">
        
        <?php

        require_once('inc/database.php');
            $products= getAllProducts();
            
            foreach ($products as $product):
                $description = readMore($product['discription'], 20);    
        ?>

        <div class="banner">
            <img src="assets/images/<?=$product['image']?>" alt="">
            
            <div class="content" >

                <h3 style="color: purple;">limited offer</h3>
                <p style="color: #2C394B;">upto <?=$product['discount']?> off</p>
                <p style="color: #055052"><?=$description?>...<a href="detail_pro.php?id=<?=$product['product_id']?>" class="btn" style="background-color:brown;font-size:150%">check out</a></p>
            
            </div>
            
        </div>

        <?php endforeach;?>
        
</section>