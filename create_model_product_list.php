<?php
    require_once('inc/database.php');
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $isCreated = createProductList($_POST);

        if($isCreated){
            header("Location: index.php?page=products_list");
	    
        }
    }