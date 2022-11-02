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
  <nav class="navbar navbar-expand-md fixed-top px-5 py-3 bg-white">
    <a class="navbar-brand mr-auto" href="#">
      <img id="nike-logo" src="../resouces/icons/nike_logo.png" height="40" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto text-end">
        <li class="nav-item active px-4">
          <a class="nav-link" href="../index.php">Home</a>
        </li>
        <li class="nav-item px-4">
          <a class="nav-link" href="#">Products</a>
        </li>
        <li class="nav-item px-4">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item px-4">
          <a class="nav-link" href="#">Contact Us</a>
        </li>
      </ul>
      <div class="text-end">
        <img src="../resouces/icons/cart.svg" alt="" width="18">
      </div>
    </div>
  </nav>
  <div class="body-section mt-5 p-5 h-100 w-75 position-relative d-flex flex-column justify-content-center" >
    <h5 class="back-btn">
      <a href="cart.php" class="text-body">
          &#x2190; Back to shopping cart
      </a>
    </h5>
    <hr>
    <h2 class="cart-header mb-5 pt-3 ">Checkout</h2>
    <div class="cart d-flex flex-row position-relative h-100">
      <div class="cart-products-section w-75">
        <div class="row">
          <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Billing address</h4>
            <form class="needs-validation" novalidate>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="firstName">First name</label>
                  <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                  <div class="invalid-feedback">
                    Valid first name is required.
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="lastName">Last name</label>
                  <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                  <div class="invalid-feedback">
                    Valid last name is required.
                  </div>
                </div>
              </div>

              <div class="mb-3">
                <label for="username">Username</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">@</span>
                  </div>
                  <input type="text" class="form-control" id="username" placeholder="Username" required>
                  <div class="invalid-feedback" style="width: 100%;">
                    Your username is required.
                  </div>
                </div>
              </div>

              <div class="mb-3">
                <label for="email">Email <span class="text-muted">(Optional)</span></label>
                <input type="email" class="form-control" id="email" placeholder="you@example.com">
                <div class="invalid-feedback">
                  Please enter a valid email address for shipping updates.
                </div>
              </div>

              <div class="mb-3">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                <div class="invalid-feedback">
                  Please enter your shipping address.
                </div>
              </div>

              <div class="mb-3">
                <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
              </div>

              <div class="row">
                <div class="col-md-5 mb-3">
                  <label for="country">Country</label>
                  <select class="form-select d-block w-100" id="country" required>
                    <option value="">Choose...</option>
                    <option>United States</option>
                  </select>
                  <div class="invalid-feedback">
                    Please select a valid country.
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="state">State</label>
                  <select class="form-select d-block w-100" id="state" required>
                    <option value="">Choose...</option>
                    <option>California</option>
                  </select>
                  <div class="invalid-feedback">
                    Please provide a valid state.
                  </div>
                </div>
                <div class="col-md-3 mb-3">
                  <label for="zip">Zip</label>
                  <input type="text" class="form-control" id="zip" placeholder="" required>
                  <div class="invalid-feedback">
                    Zip code required.
                  </div>
                </div>
              </div>

              <hr class="mb-4">

              <h4 class="mb-3">Payment</h4>

              <div class="d-block my-3">
                <div class="custom-control custom-radio">
                  <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                  <label class="custom-control-label" for="credit">Credit card</label>
                </div>
                <div class="custom-control custom-radio">
                  <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                  <label class="custom-control-label" for="debit">Debit card</label>
                </div>
                <div class="custom-control custom-radio">
                  <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                  <label class="custom-control-label" for="paypal">PayPal</label>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="cc-name">Name on card</label>
                  <input type="text" class="form-control" id="cc-name" placeholder="" required>
                  <small class="text-muted">Full name as displayed on card</small>
                  <div class="invalid-feedback">
                    Name on card is required
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="cc-number">Credit card number</label>
                  <input type="text" class="form-control" id="cc-number" placeholder="" required>
                  <div class="invalid-feedback">
                    Credit card number is required
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 mb-3">
                  <label for="cc-expiration">Expiration</label>
                  <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                  <div class="invalid-feedback">
                    Expiration date required
                  </div>
                </div>
                <div class="col-md-3 mb-3">
                  <label for="cc-cvv">CVV</label>
                  <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                  <div class="invalid-feedback">
                    Security code required
                  </div>
                </div>
              </div>
            </form>
          </div>
          </div>
      </div>
      <div class="products-summary-section flex-shrink-1 w-25 d-flex flex-column px-2">
        <h4 class="mb-3">Summary</h4>
        <div class="d-flex flex-column">
          <div class="d-flex justify-content-between summary-details">
            <p>Subtotal</p>
            <p>1827.00</p>
          </div>
          <div class="d-flex justify-content-between summary-details">
            <p>Estimated Delivery & Handling</p>
            <p>1827.00</p>
          </div>
          <div class="d-flex justify-content-between summary-details">
            <p>VAT (15%)</p>
            <p>1827.00</p>
          </div>
          <hr>
          <div class="d-flex justify-content-between summary-details mb-3">
            <p>Total</p>
            <strong>1827.00</strong>
          </div>
          <div class="d-flex">
            <a href="" class="checkout-link w-75 h-100">
              <div class="checkout-btn d-flex justify-content-center align-items-center w-100">
                <p class="m-0">CHECKOUT</p>
              </div>
            </a>
            <div class="d-flex justify-content-center align-items-center w-25">
              <a href="cart.php?action=remove" >
                  <img src="../resouces/icons/update.png" width="19">
              </a>
            </div>
          </div>
        </div>

      </div>

      <?php    
        if(isset($_GET["action"])){
          if($_GET["action"] == "remove"){
            foreach($_SESSION['cart'] as $key => $value){
              if($value['id']==$_GET['id']){
                unset($_SESSION['cart'][$key]);
                header( "Location: cart.php" );
              }
            }
          }
        }
      ?>
    </div>
  </div>
</body>
</html>

