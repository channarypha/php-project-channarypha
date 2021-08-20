<?php
    require_once('../inc/database.php');
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        createProductList($_POST);
    }