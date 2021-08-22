<?php
    require_once('inc/database.php');
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        register($_POST);
        header('location: http://localhost/login/?page=login');
    }