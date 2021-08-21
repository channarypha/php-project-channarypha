<?php 
    // session_start();
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
        // $product_id = $value['product_id'];
        $product_name = $value['product_name'];
        $brand_id = $value['brand_id'];
        $category_id = $value['category_id'];
        $price = $value['price'];
        $discount = $value['discount'];
        $image= $_FILES['file']['name'];
        $success = $db->query("INSERT INTO products
        (product_name, brand_id, category_id, price, discount, image) 
        VALUES ('$product_name', $brand_id, $category_id, $price, $discount, '$image')");
        // header("Location: index.php");
        if($success){
            header('Location: index.php?page=products_list');
        } else {
            echo("Error: <br>" . $db->error);
        }
    }



    // delete prodcut list
    function deleteProductList($id) {
        $db = new mysqli('localhost', 'root', '', 'electronic_shop');
        $success=$db->query("DELETE FROM products WHERE product_id = '$id'");
        if($success){
            header('Location: index.php?page=products_list');
        } else {
            echo("Error: <br>" . $db->error);
        }
    }



    // update products
    function updateProduct($value) {
        $db = new mysqli('localhost', 'root', '', 'electronic_shop');
        $id = $value['product_id'];
        $product_name = $value['product_name'];
        $brand_id = $value['brand_id'];
        $category_id = $value['category_id'];
        $price = $value['price'];
        $discount = $value['discount'];
        $success = $db->query("UPDATE products SET 
        -- product_id = '$id', 
        product_name = '$product_name', 
        brand_id = '$brand_id', 
        price = '$price', 
        discount = '$discount' 
        WHERE product_id = $id");
        // header("Location: index.php");
        if($success){
            header('Location: index.php?page=products_list');
        } else {
            echo("Error: <br>" . $db->error);
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
        return db()->query("SELECT DISTINCT *
        -- customers.customer_name, 
        -- products.product_name, order_items.quantity, 
        -- orders.order_date, orders.shipped_date
        FROM customers
        INNER JOIN orders ON orders.customer_id = orders.customer_id
        INNER JOIN order_items ON orders.order_id = order_items.order_id
        INNER JOIN products ON order_items.product_id = products.product_id
        ORDER BY products.product_name");
    }


// search
function searchByProductName($category_name){
    $name = $category_name['search'];
    return db()->query("SELECT * FROM categories WHERE category_name LIKE '%$name%'");
} 
    
   
    