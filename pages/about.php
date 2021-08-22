<section class="banner-container" method="post">
        <!-- <div class="banner">
            <img src="https://i.pinimg.com/736x/b9/90/75/b99075bdb496faa8421d88f1f26fa307.jpg" alt="">
            <div class="content">
                <h3>special offer</h3>
                <p>upto 45% off</p>
                <a href="#" class="btn" style="background-color:brown;font-size:300%">check out</a>
            </div>
        </div>

        <div class="banner">
            <img src="https://media.wired.com/photos/5b9a9073359b1371926e43dd/125:94/w_2054,h_1544,c_limit/iPhoneSE-617939746.jpg" alt="">
            <div class="content">
                <h3>limited offer</h3>
                <p>upto 50% off</p>
                <a href="#" class="btn" style="background-color:brown;font-size:300%">check out</a>
            </div>
        </div>
        <div class="banner">
            <img src="https://i.ytimg.com/vi/v2qCSnaRfV8/maxresdefault.jpg" alt="">
            <div class="content">
                <h3>specail offer</h3>
                <p>upto 60% off</p>
                <a href="#" class="btn" style="background-color:brown;font-size:300%">check out</a>
            </div>
        </div>
        <div class="banner">
            <img src="https://cdn.mos.cms.futurecdn.net/525e2faf37a2381e9ef399d5d2ab7e8c-1200-80.jpeg" alt="">
            <div class="content">
                <h3>limited offer</h3>
                <p>upto 30% off</p>
                <a href="#" class="btn" style="background-color:brown;font-size:300%">check out</a>
            </div>
        </div> -->
        <!-- <div class="banner">
            <img src="https://i.pinimg.com/originals/47/08/ac/4708ac0a67aa83d05ca8cad106043417.jpg" alt="">
            <div class="content">
                <h3>limited offer</h3>
                <p>upto 30% off</p>
                <a href="#" class="btn" style="background-color:brown;font-size:300%">check out</a>
            </div>
        </div> -->
        <?php
        require_once('inc/database.php');
            $products= getAllProducts();
            
            foreach ($products as $product):
                $description = readMore($product['discription'], 20);
                
        ?>
        <div class="banner">
            <img src="assets/images/<?=$product['image']?>" alt="">
            
            <div class="content" >
                <h3 style="color: green;">limited offer</h3>
                <p style="color: pink;">upto <?=$product['discount']?> off</p>
                <p style="color: #AE00FB;"><?=$description?>...<a href="detail_pro.php?id=<?=$product['product_id']?>" class="btn" style="background-color:brown;font-size:300%">check out</a></p>
            </div>
            
        </div>
        <?php endforeach;?>
</section>