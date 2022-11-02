<?php
  $con = mysqli_connect('localhost', 'root'); 
  mysqli_select_db($con, 'ecommerce'); 
  $sql = "SELECT * FROM products";
  $products = $con->query($sql);
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/styles.css">
  <link rel='shortcut icon' href="../favicon-32.png" type="image/png">
  <title>Nike Products</title>
</head>
<body>
  <?php include 'nav.php';?>
  <div class="body-section" >
    <div class="products-section py-5">
      <div class="trending-products d-flex flex-column align-items-center flex-wrap">
        <h2 class="products-header my-5 py-5 ">All Products</h2>
        <div class="products d-flex justify-content-center gap-3 flex-wrap">
          <?php
          
            while($product = mysqli_fetch_assoc($products)):
          ?>
          <div class="product d-flex flex-column ms-4 p-2">
            <form method="post" action="cart.php?id=<?=$product['id']?>">
              <div>
                <a href="#"><img src="../resouces/images/product_images/<?= $product['image']?>" width="400"></a>
              </div>
              <h6 class="product-title"><?= $product['title']?></h6>
              <p class="product-desc"><?= $product['description']?></p>
              <input type="hidden" name="title" value="<?=$product['title']?>">
              <input type="hidden" name="price" value="<?=$product['price']?>">
              <input type="hidden" name="description" value="<?=$product['description']?>">
              <input type="hidden" name="image" value="<?=$product['image']?>">
              <div class="d-flex justify-content-between align-items-baseline">
                <p class="product-price">$<?= $product['price']?></p>
                <button class="add-to-cart m-2 p-2" type="submit" name="add-to-cart" value=""><img src="../resouces/icons/cart-78-128.png" width=15></button>
              </div>
            </form>
          </div>
          <?php endwhile; 
          
          ?>
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
  <?php include 'footer.php'; ?>
  <script src="../function.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
