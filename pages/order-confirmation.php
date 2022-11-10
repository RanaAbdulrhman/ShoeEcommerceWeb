<?php 
session_start();
  include("php/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/cart.css">
    <link rel='shortcut icon' href="../favicon-32.png" type="image/png">
    <title>Shopping Cart</title>
  </head>
  <body >
    <?php 
      // Empty the cart but leave the products
      $_SESSION['confirmed-cart'] = $_SESSION['cart'];
      unset($_SESSION['cart']);
      include('nav.php');
     ?>
    <div class="position-relative mx-5 w-75" style="top:100px; left:100px;">
      <h2>Your Order is Confirmed!</h2>
      <p>Your order has been confirmed and it will be shipped within the next two days.</p>
      <hr>
      <div class="billing-address-details d-flex justify-content-between mt-4">
        <div class="detail">
          <h5>Name</h5>
          <p class="text-secondary"><?php echo $_POST['card-name']?></p>
        </div>
        <div class="detail">
          <h5>Country</h5>
          <p class="text-secondary"><?php echo $_POST['country']?>/<?php echo $_POST['city']?></p>
        </div>
        <div class="detail">
          <h5>Address</h5>
          <p class="text-secondary"><?php echo $_POST['street']?></p>
        </div>
        <div class="detail">
          <h5>Zip</h5>
          <p class="text-secondary"><?php echo $_POST['zip']?></p>
        </div>
      </div>
      <hr>
      <div class="cart d-flex flex-row position-relative h-100">
        <div class="cart-products-section w-100">
          <?php 
            if(! empty($_SESSION['confirmed-cart'])){
              foreach($_SESSION['confirmed-cart'] as $key => $value){
          ?>
          <div class="cart-products d-flex flex-column w-100">
            <div class="cart-product d-flex pt-5 pb-3 position-relative"> 
              <div class="product-pic me-5">
                <img src="../resouces/images/product_images/<?=$value['image']?>" width="150">
              </div>
              <div class="d-flex flex-column ">
                <h6 class="cart-product-title mb-3"><?=$value['title']?></h6>
                <p class="product-desc mb-3"><?=$value['description']?></p>
                <p class="product-price mb-3"><?=$value['price']?></p>
                <p class="product-price mb-3">Qty: <?=$value['quantity']?></p>
              </div>
            </div>
          </div>
          <?php
            $subtotal = $subtotal + $value['price'] * $value['quantity'];   
            }
          }else{
          ?>
          <p class='empty-cart'>There are no items in your bag</p>
          <?php
          }
          ?>
        </div>
      </div>
      <div class="d-flex justify-content-end">
        <div class="products-summary-section d-flex px-2 flex-column w-25">
            <div class="d-flex justify-content-between summary-details mt-4 mb-2">
              <p>Items</p>
              <p><?php echo $_SESSION['number_of_items']; ?></p>
            </div>
            <div class="d-flex justify-content-between summary-details mb-2 mt-1">
              <p>Subtotal</p>
              <p><?=$subtotal?></p>
            </div>
            <div class="d-flex justify-content-between summary-details mb-2 mt-1">
              <p>Delivery Fee</p>
              <p>Free</p>
            </div>
            <div class="d-flex justify-content-between summary-details mb-1 mt-1">
              <p>VAT (15%)</p>
              <p><?=$subtotal*0.15?></p>
            </div>
            <hr>
            <div class="d-flex justify-content-between summary-details mb-1 mt-1">
              <strong>Total</strong>
              <strong><?=$subtotal*1.15?></strong>
            </div>
            <hr>
        </div>
      </div>
      <h5 class="my-3">We will be sending a confirmation email when items are shipped successfully</h5>
      <h5 class="mb-3"><strong>Thank you for shopping with us!</strong></h5>
      <h5 class="mb-5">Nike Team</h5>
      </div>
      <div id="godown"></div>
      <?php include 'footer.php'; ?>
  </body>
  <script src="../function.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</html>

