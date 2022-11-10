<?php 
session_start();
  include("php/connection.php");
  if(isset($_POST['submit'])){
    $_SESSION['street'] = $_POST['street'];
    $_SESSION['zip'] = $_POST['zip'];
    $_SESSION['city'] = $_POST['city'];
    $_SESSION['country'] = $_POST['country'];
    $_SESSION['card-name'] = $_POST['card-name'];
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
  <body >
    <?php 
      include('nav.php');
     ?>
    <div class="body-section mt-5 p-5 h-100 d-flex flex-column justify-content-center position-relative w-75" >
      <div class="checkout-section d-flex flex-column">
        <h5 class="back-btn">
          <a href="products.php" class="text-body">
              &#x2190; Continue shopping
          </a>
        </h5>
        <hr>
        <h2 class="checkout-header mb-5 pt-3 ">Checkout</h2>
        <form method="post" action="order-confirmation.php">
            <div class="shipping-details mb-5 row">
            <h4 class="mb-3">Shipping Address</h4>
              <div class="row">
                <div class="col-md-12 mb-3">
                  <label >Street Address</label>
                  <input name="street" type="text" class="form-control" id="address" placeholder="1234 Main St" value="1234 Main St" required>
                  <div class="invalid-feedback">
                    Please enter your shipping address.
                  </div>
                </div>
                </div>
                <div class="row">
                  <div class="col-md-4 mb-3">
                    <label >Zip Code</label>
                    <input name="zip" type="text" class="form-control" id="address" value="123">
                    <div class="invalid-feedback">
                      Please enter your shipping address.
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label>City</label>
                    <input name="city" type="text" class="form-control" id="address" value="Kharj" required>
                    <div class="invalid-feedback">
                      Please enter your shipping address.
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label>Country</label>
                    <select name="country" class="form-select" aria-label="Default select example">
                      <option selected>Saudi Arabia</option>
                      <option value="1">United Arab Emirates</option>
                      <option value="2">Kuwait</option>
                      <option value="3">Qatar</option>
                    </select>
                  </div>
                </div>
                </div>
                <div class="row mb-5">
                  <h4 class="mb-3">Payment</h4>
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="cc-name">Name on card</label>
                      <input name="card-name" type="text" class="form-control" id="cc-name" value="Rana Aldossari" required>
                      <small class="text-muted">Full name as displayed on card</small>
                      <div class="invalid-feedback">
                        Name on card is required
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="cc-number">Credit card number</label>
                      <input name="card-num" type="text" class="form-control" id="cc-number" value="1122334455666688" required>
                      <div class="invalid-feedback">
                        Credit card number is required
                      </div>
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="cc-expiration">Expiration</label>
                    <input name="card-exp" type="text" class="form-control" id="cc-expiration" value="02/06" required>
                    <div class="invalid-feedback">
                      Expiration date required
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="cc-cvv">CVV</label>
                    <input name="card-cvv" type="text" class="form-control" id="cc-cvv" value="123" required>
                    <div class="invalid-feedback">
                      Security code required
                    </div>
                  </div>
                </div>
              </div>
              <div class="d-grid gap-2 d-md-block text-end me-4">
                <button class="btn btn-primary btn-dark" name="submit" type="submit">PROCEED</button>
              </div>
        </form>
      </div>
  </body>
  <script src="../function.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</html>

