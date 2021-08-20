<section class="product" id="product">
        <h1 class="heading">All <span>products</span></h1>
        <div class="d-flex justify-content-end p-2">
            <a href="process/create_product_list.php" class="btn btn-primary" id="add"><i class="fa fa-plus" aria-hidden="true"></i></a>
        </div>
        <div class="box-container">
        <?php   
            require_once('inc/database.php');
            $products = getAllProducts();
            foreach($products as $product):
        ?>     
        <div class="box">
                <span class="discount">
                    upto <?=$product['discount']?> % off   
                </span>
                <br><br>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQijyLPC_QjDUUx6fIsl8gExWFRxL78OKRTD0K4WNlHwetWkmC1zBEZDCzOveVMqSdyKbg&usqp=CAU" alt="">
                <!-- <img src="assets/images/<?= $product['image'] ?>" alt=""> -->
                <div class="action d-flex justify-content-end">
                    <a href="process/update_product_list.php?id=<?=$product['product_id']?>" class="btn btn-sm mr-2" style="font-size:20px;color:green"><i class="fa fa-pencil"></i></a>
                    <a href="process/delete_product_list.php?id=<?=$product['product_id']?>" class="btn btn-sm" style="font-size:20px;color:red"><i class="fa fa-trash"></i></a>
                </div>
                <h3><?=$product['category_name']?></h3>
                <div class="price"><?=$product['price']?> $</div>
                <a href="#" class="btn" style="background-color:pink; font-size:300%">add to cart</a>
        </div>
        <?php 
            endforeach; 
        ?>
    </div>
</section>
