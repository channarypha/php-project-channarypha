<?php
    require_once('partial/header.php');
    require_once('partial/navbar.php');
    
    if(isset($_GET['page'])) {
        if ($_GET['page'] == 'home'){
            include_once('pages/home.php');
        }elseif($_GET['page'] == 'about'){
            include_once('pages/about.php');
        }elseif($_GET['page'] == 'customers'){
            include_once('pages/customers.php');
        }elseif($_GET['page'] == 'products_list'){
            include_once('pages/products_list.php');
        }elseif($_GET['page'] == 'orders'){
            include_once('pages/orders.php');
        }elseif($_GET['page'] == 'user_management'){
            include_once('pages/user_management.php');
        }elseif($_GET['page'] == 'contact'){
            include_once('pages/contact.php');
        }elseif($_GET['page'] == 'login'){
            include_once('pages/login.php');
        }elseif($_GET['page'] == 'register'){
            include_once('pages/register.php');
        }else{
            include_once('pages/404.php');
        }
    }else{
           include_once('pages/home.php'); 
    }
    include_once('partial/footer.php'); 