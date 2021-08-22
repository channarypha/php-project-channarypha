<?php 
    if (isset($_SESSION['username'])):
        header('Location: http://localhost/login/?page=welcome');
    else:         
?>
<section class="contact">    
    <form action="login_model.php" method="post" style="width:50%"> 
    <h1 class="heading"> Login </h1>
        <div class="inputBox">
            <input type="text" placeholder="username" name="username">
            <input type="password" placeholder="password" name="password">
        </div>
        <input type="submit" value="Login" class="btn" style="background-color:pink;font-size:300%">
        <br><br><br><h3>Forget password? <a href="?page=register">Register !</a></h3>
    </form>
    <hr>
            <?php if (isset($_SESSION['message'])): ?>
                <div class="alert alert-danger alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Error !</strong> <?= $_SESSION['message'] ?>
                </div>
            <?php endif; ?>
    <img src="https://canary.contestimg.wish.com/api/webimage/5a4cad5c2495d45d469805b2-large.jpg?cache_buster=f31a8f979adc22ff153e61b258e369d8" alt="">
</section>
<?php endif; ?>