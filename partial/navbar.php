<?php session_start() ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Hight Ways</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
    <?php if(isset($_SESSION['username'])): ?>
      <li class="nav-item active">
        <a class="nav-link" href="?page=logout">Logout</a>
      </li>
      <?php else: ?>
        <li class="nav-item active">
          <a class="nav-link" href="?page=login">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=register">Register</a>
        </li>
      <?php endif; ?>
      <?php if(isset($_SESSION['username'])): ?>
        
      <li class="nav-item">
        <a class="nav-link" href="?page=welcome">Welcome</a>
      </li>
     
    </ul>
    <span class="navbar-text">
    <?= $_SESSION['username'] ?>
    </span>
    <?php endif; ?>
  </div>
</nav>



<header>
<div class="header-1">
    <a href="#" class="logo"><i class="fa fa-snowflake-o" aria-hidden="true"></i>Electronic shop</a>

    <form action="" class="search-box-container" method="post">
        <input type="search" id="search-box" placeholder="search category phone..." name="search">
        <label for="search-box" class="fas fa-search"></label>
    </form>

</div>

<div class="header-2"style="background-color:pink;">

    <div id="menu-bar" class="fas fa-bars"></div>

    <nav class="navbar">
        <a href="?page=home">home</a>
        <a href="?page=about">about</a>
        <a href="?page=products_list">product list</a>
        <a href="?page=customers">customers</a>
        <a href="?page=orders">orders</a>
        <a href="?page=user_management">user management</a>
        <a href="?page=contact">contact</a>
    </nav>

    <div class="icons">
        <a href="#" class="fas fa-shopping-cart"></a>
        <a href="#" class="fas fa-heart"></a>
        <a href="?page=login" class="fas fa-user-circle"></a>
    </div>
</div>
</header>

