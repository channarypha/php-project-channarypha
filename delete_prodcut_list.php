<?php
    require_once('../inc/database.php');
    $id = $_GET['id'];
    deleteProductList($id);
    