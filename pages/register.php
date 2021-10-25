<section class="contact"> 

    <?php

        require_once('inc/database.php');

        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            $isRegister = register($_POST);

            if ($isRegister){

                header('location: index.php?page=home');

            } 
        }

    ?>

    <form action="" method="post" style="width:50%"> 

        <h1 class="heading"> Register </h1>

        <div class="inputBox">

            <input type="text" placeholder="username" name="username">
            <input type="password" placeholder="password" name="password">
            <input type="password" placeholder="comform password" name="comform">

        </div>

        <input type="hidden" name="position" class="form-control" value="user">
        <input type="submit" value="Register" class="btn" style="background-color:pink;font-size:300%">
    
    </form>

    <img src="assets/images/banner-1.jpg" alt="">

</section>