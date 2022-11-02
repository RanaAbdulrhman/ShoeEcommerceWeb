<?php 
session_start();
$subtotal=0;
if(isset($_POST['add-to-cart'])){

  if(isset($_SESSION['cart'])){
    
    $session_array_id = array_column($_SESSION["cart"], "id");
    if(!in_array($_GET['id'],$session_array_id)){
      $session_array = array (
        'id' => $_GET['id'],
        "title" => $_POST['title'],
        "price" => $_POST['price'],
        "description" => $_POST['description'],
        "image" => $_POST['image'],
        "quantity" => "1",
      );
      $_SESSION['cart'][] = $session_array;
    }

  }else{
    $session_array = array (
      'id' => $_GET['id'],
      "title" => $_POST['title'],
      "price" => $_POST['price'],
      "description" => $_POST['description'],
      "image" => $_POST['image'],
      "quantity" => "1",
    );
    $_SESSION['cart'][] = $session_array;

  }
}
if(isset($_GET["action"])){
  if($_GET["action"] == "remove"){
    foreach($_SESSION['cart'] as $key => $value){
      if($value['id']==$_GET['id']){
        unset($_SESSION['cart'][$key]);
      }
    }
  }
  if($_GET["action"] == "update"){
    if(!($_POST['quantity']==="Qty") ){
      foreach($_SESSION['cart'] as $key => $value){
        if($value['id']==$_GET['id']){
          $_SESSION['cart'][$key]["quantity"] = $_POST['quantity'];

        }
      }
    }
  }
}



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
<body>
  <?php include 'nav.php';?>
  <div class="body-section mt-5 p-5 h-100 w-75 position-relative d-flex flex-column justify-content-center" >
    <h5 class="back-btn">
      <a href="products.php" class="text-body">
          &#x2190; Continue shopping
      </a>
    </h5>
    <hr>
    <div class="cart d-flex flex-row position-relative h-100">
      <div class="cart-products-section w-75">
        <h2 class="cart-header mt-3 mb-1 pt-3 ">Your Cart</h2>
        <?php 
          if(! empty($_SESSION['cart'])){
            foreach($_SESSION['cart'] as $key => $value){
        ?>
        <div class="cart-products d-flex flex-column w-100">
          <div class="cart-product d-flex pt-5 pb-3 position-relative"> 
            <div class="product-pic me-5">
              <img src="../resouces/images/product_images/<?=$value['image']?>" width="150">
            </div>
            <div class="d-flex flex-column">
              <h6 class="cart-product-title"><?=$value['title']?></h6>
              <p class="product-desc"><?=$value['description']?></p>
              <p class="product-price"><?=$value['price']?></p>
              <form method="post">
                <div class="d-flex flex-row align-items-start">
                  <input type="number" name="quantity" value="<?=$value['quantity']?>" class="w-50 form-control form-control-sm">
                </div>
                
                <div class="d-flex ">
                  <a href="cart.php?action=remove&id=<?=$value['id']?>" class="py-3 me-3">
                    <img src="../resouces/icons/icons8-trash.svg" width="20">
                  </a>
                  <button formaction="cart.php?action=update&id=<?=$value['id']?>" class="update-btn py-3" type="submit" value="" name="update">
                    <img src="../resouces/icons/update.png" width="20">
                  </button>
                </div>
              </form>

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
      <div class="products-summary-section flex-shrink-1 w-25 d-flex flex-column px-2">
        <h2 class="cart-header mt-3 pt-3">Summary</h2>
        <div class="d-flex flex-column mt-1">
          <div class="d-flex justify-content-between summary-details mt-4 mb-2">
            <p>Items</p>
            <p><?php echo count($_SESSION['cart']); ?></p>
          </div>
          <div class="d-flex justify-content-between summary-details mb-2 mt-1">
            <p>Subtotal</p>
            <p><?=$subtotal?></p>
          </div>
          <div class="d-flex justify-content-between summary-details mb-2 mt-1">
            <p>Estimated Delivery & Handling</p>
            <p>Free</p>
          </div>
          <div class="d-flex justify-content-between summary-details mb-1 mt-1">
            <p>VAT (15%)</p>
            <p><?=$subtotal*0.15?></p>
          </div>
          <hr>
          <div class="d-flex justify-content-between summary-details mb-3 mt-1">
            <p>Total</p>
            <strong><?=$subtotal*1.15?></strong>
          </div>
            <a href="" class="checkout-link h-100">
              <div class="checkout-btn d-flex justify-content-center align-items-center w-100">
                <p class="m-0">CHECKOUT</p>
              </div>
            </a>
          </div>
        </div>

      </div>
    </div>
  </div>
  
  <?php 
  // var_dump($_SESSION['cart']);
  // echo count($_SESSION['cart']);
  // echo "<br>";
  // echo isset($_SESSION['cart']);

  ?>
  <?php include 'footer.php';?>
</body>
</html>

