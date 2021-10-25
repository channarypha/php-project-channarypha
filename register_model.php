<?php

    require_once('inc/database.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        $isRegister = register($_POST);

        if ($isRegister){

            header('location: index.php?page=home');
            
        }
        
    }