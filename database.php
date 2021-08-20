<?php 
    session_start();
    function db(){
        return new mysqli('localhost', 'root', '', 'electronic_shop');
    }

    // get all products
    function getAllProducts() {
        $db = new mysqli('localhost', 'root', '', 'electronic_shop');
        return db()->query("SELECT * FROM products 
        INNER JOIN categories ON products.category_id = categories.category_id
        INNER JOIN brands ON products.brand_id = brands.brand_id
        ");
    }
    // select one products
    function selectOneProduct($id) {
        $db = new mysqli('localhost', 'root', '', 'electronic_shop');
        return db()->query("SELECT * FROM products WHERE product_id = $id");
    }
    
    // create product list
    function createProductList($value) {
        $db = new mysqli('localhost', 'root', '', 'electronic_shop');
        $product_id = $value['product_id'];
        $product_name = $value['product_name'];
        $brand_id = $value['brand_id'];
        $category_id = $value['category_id'];
        $price = $value['price'];
        $discount = $value['discount'];
        db()->query("INSERT INTO products
        (prodcut_id, product_name, brand_id, category_id, price, discount) 
        VALUES ($product_id, '$prodcut_name', $brand_id, $category_id, $price, $discount)");
        header("Location: index.php");
    }
    // delete prodcut list
    function deleteProductList($id) {
        $db = new mysqli('localhost', 'root', '', 'electronic_shop');
        db()->query("DELETE * FROM prodcuts WHERE prodcut_id = $id");
        header('Location: index.php');
    }
    // update products
    function updateProduct($value, $file) {
        $db = new mysqli('localhost', 'root', '', 'electronic_shop');
        $product_id = $value['product_id'];
        $product_name = $value['product_name'];
        $brand_id = $value['brand_id'];
        $category_id = $value['category_id'];
        $price = $value['price'];
        $discount = $value['discount'];
        db()->query("UPDATE products SET 
        product_id = '$product_id', 
        product_name = '$product_name', 
        brand_id = '$brand_id', 
        price = '$price', 
        discount = '$discount' 
        WHERE product_id = $id");
        header("Location: index.php");

        // get image
        $imageName = $_FILES['image']['name'];
        $imagTmp = $_FILES['image']['tmp_name'];
        $imageSize = $_FILES['image']['size'];
        $error = $_FILES['image']['error'];

       
        if($imageSize > 525000) {
                header('location: index.php');
                $_SESSION['message'] = "Big size";
        } else {
                $extension = pathinfo($imageName, PATHINFO_EXTENSION);
                $extensionLocal = strtolower($extension);

                $allowExtension = array('jpg', 'jpeg', 'png');
                if(in_array($extensionLocal, $allowExtension)) {
                    $newImageName = uniqid('post-', true) . '.' . $extensionLocal;
                    $folderImage = 'assets/images/'. $newImageName;
                    move_uploaded_file($imagTmp, $folderImage);
                    // echo dirname(getcwd());
                    return db()->query("INSERT INTO products(image) VALUES('$newImageName')");
                }else {
                    header('location: index.php');
                }
        }
       
    }
    // get all customers
    function getAllCustomers() {
        $db = new mysqli('localhost', 'root', '', 'electronic_shop');
        return db()->query("SELECT * FROM customers");
    }
    // get all users
    function getAllUsers() {
        $db = new mysqli('localhost', 'root', '', 'electronic_shop');
        return db()->query("SELECT * FROM users");
    }
    // get all orders
    function getAllOrders() {
        $db = new mysqli('localhost', 'root', '', 'electronic_shop');
        return db()->query("SELECT *
        FROM customers
        INNER JOIN orders ON orders.customer_id = orders.customer_id
        INNER JOIN order_items ON orders.order_id = order_items.order_id
        INNER JOIN products ON order_items.product_id = products.product_id
        ");
    }

    // upload image
    // function uploadImage($file) {
    //     //print_r($_FILES['image']);
    //     $imageName = $_FILES['image']['name'];
    //     $imagTmp = $_FILES['image']['tmp_name'];
    //     $imageSize = $_FILES['image']['size'];
    //     $error = $_FILES['image']['error'];

       
    //     if($imageSize > 525000) {
    //             header('location: index.php');
    //             $_SESSION['message'] = "Big size";
    //     } else {
    //             $extension = pathinfo($imageName, PATHINFO_EXTENSION);
    //             $extensionLocal = strtolower($extension);

    //             $allowExtension = array('jpg', 'jpeg', 'png');
    //             if(in_array($extensionLocal, $allowExtension)) {
    //                 $newImageName = uniqid('post-', true) . '.' . $extensionLocal;
    //                 $folderImage = 'assets/images/'. $newImageName;
    //                 move_uploaded_file($imagTmp, $folderImage);
    //                 // echo dirname(getcwd());
    //                 return db()->query("INSERT INTO post(image) VALUES('$newImageName')");
    //             }else {
    //                 header('location: index.php');
    //             }
    //     }
       
       
    // }

    // get image
    function getImage() {
        return db()->query("SELECT * FROM products");
    }

    
    
   
    