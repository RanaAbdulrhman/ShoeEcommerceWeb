<?php 
session_start();
?>

<nav class="navbar navbar-expand-md fixed-top px-5 py-3 bg-white">
    <a class="navbar-brand mr-auto" href="../index.php">
      <img id="nike-logo" src="resouces/icons/nike_logo.png" height="40" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto text-end">
        <li class="nav-item active px-4">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item px-4">
          <a class="nav-link" href="pages/products.php">Products</a>
        </li>
        <li class="nav-item px-4">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item px-4">
          <a class="nav-link" href="#">Contact Us</a>
        </li>
      </ul>
      <a href="pages/cart.php" style="text-decoration: none;">
        <div class="text-end mt-2">
          <i class="fa" style="font-size:24px"><img src="resouces/icons/cart.svg" alt="" width="18"></i>
          <span class='badge badge-warning' id='lblCartCount'> 
            <?php
              if(isset($_SESSION['cart'])){
                echo count($_SESSION['cart']);
              }else{
                echo 0;
              }
            ?>
          </span>
        </div>
     </a>
    </div>
  </nav>