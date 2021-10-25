<?php

    require_once('inc/database.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $isUpdated = updateProduct($_POST);

        if($isUpdated){

            header('Location: index.php?page=products_list');

        }
        
    }
