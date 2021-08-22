<?php 
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
        
        $product_name = $value['product_name'];
        $brand_id = $value['brand_id'];
        $category_id = $value['category_id'];
        $price = $value['price'];
        $discount = $value['discount'];
        $description = $value['discription'];
        $image= $_FILES['file']['name'];
        $success = $db->query("INSERT INTO products(product_name, brand_id, category_id, price, discount, image, discription) VALUES ('$product_name', $brand_id, $category_id, $price, $discount, '$image', '$description')");
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
        $description = $value['discription'];
        $success = $db->query("UPDATE products SET 
       
        product_name = '$product_name', brand_id = '$brand_id', price = '$price', discount = '$discount', discription = '$description' WHERE product_id = $id");
        
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
        return db()->query("SELECT DISTINCT * FROM customers INNER JOIN orders ON customers.customer_id = orders.customer_id INNER JOIN order_items ON orders.order_id = order_items.order_id INNER JOIN products ON order_items.product_id = products.product_id ORDER BY products.product_name");
    }


// search
function searchByProductName($category_name){
    $name = $category_name['search'];
    return db()->query("SELECT * FROM 
    products 
        INNER JOIN categories ON products.category_id = categories.category_id INNER JOIN brands ON products.brand_id = brands.brand_id WHERE category_name LIKE '%$name%'");
} 
    

// login
function getUser() {
    $db = new mysqli('localhost', 'root', '', 'electronic_shop');
    return db()->query("SELECT * FROM users");
}

function login($value) {
    $username = $value['username'];
    $password = $value['password'];
    $array = db()->query("SELECT * FROM users WHERE username='$username' AND password='$password'");
    foreach($array as $value){
        header('Location: ../index.php?page=products_list');
    }
    header("Location: http://localhost/php-project-channarypha/?page=login");

    $users = getUser();
    foreach ($users as $user) {
       echo (password_verify($password,trim($user['password'])));
       if(password_verify($password,trim($user['password'])) and $username === $user['username']) {
            $_SESSION['username'] = $username;
            $_SESSION['position'] = $user['position'];
            $_SESSION['message'] = "Login successful";
            header('Location: http://localhost/login/?page=welcome');
       }else {
            $_SESSION['message'] = "Login failed";
            // header("Location: http://localhost/login/?page=login");
       }
    }
}

function logout() {
    session_start();
    session_destroy();
    header("Location: http://localhost/login/?page=login");
}

function register($value) {
  $username = trim($value['username']);
  $password = password_hash(trim($value['password']), PASSWORD_DEFAULT);
  $position = $value['position'];
  return db()->query("INSERT INTO users(username, password, position) VALUES('$username', '$password', '$position')");   
}


//read more
function readMore($text,$number){
    return substr($text,0,$number);    
}
    