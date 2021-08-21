<?php
    require_once('inc/database.php');
    $id = $_GET['id'];
    $isDeleted = deleteProductList($id);

    if($isDeleted){
        header('Location: index.php?page=products_list');
    }
    