<?php
session_start();
  include("php/connection.php");
  $admin_email = "rana66.2001@gmail.com";
  $admin_pass = "12345678910";

  if(isset($_POST['submit'])){
    if( strtolower($_POST['email']) == $admin_email && $_POST['password'] == $admin_pass ){
      $_SESSION['auth'] = true;
      $_SESSION['user_email'] = $_POST['email'];
      $_SESSION['login-time'] = date("F j, Y, g:i a");
      header("Location: admin.php");
    }
    else{
      $_SESSION['message'] = "Incorrect email or password";
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
  <link rel='shortcut icon' href="../favicon-32.png" type="image/png">
  <title>Nike Products</title>
</head>
<body>
  <?php include('nav.php');?>
    <section class="vh-100 gradient-custom">
        <div class="container h-75 mt-5">
          <div class="row d-flex justify-content-center align-items-center h-100 position-relative" style="top:90px">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <?php 
              if(isset($_SESSION['message'])){ 
              ?>
                  <div class="alert alert-danger" role="alert">
                    <?= $_SESSION['message']; ?>
                  </div>
              <?php
                unset($_SESSION['message']);
                }
              ?>
              <div class="card bg-dark text-white" style="border-radius: 1rem;">         
                <div class="card-body p-5">
                  <div class="mb-md-5 mt-md-4">
                    <h2 class=" mb-2 text-center">Admin Login</h2>
                    <p class="text-white-50 mb-5 text-center">Please enter your login and password!</p>
                    <form method="post">
                    <div class="mb-5">
                      <div class="form-outline form-white mb-4">
                        <label class="form-label" for="typeEmailX">Email</label>
                        <input name="email" type="email" id="typeEmailX" class="form-control form-control-md" value="rana66.2001@gmail.com" required />
                      </div>
                      <div class="form-outline form-white mb-4">
                        <label class="form-label" for="typePasswordX">Password</label>
                        <input name="password" type="password" id="typePasswordX" class="form-control form-control-md" value="12345678910" required />
                      </div>
                    </div>
                    <div class="text-center">
                      <button name="submit" class="btn btn-outline-light btn-sm px-5 mb-3" type="submit" >Login</button>
                    </div>
                  </form>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
  <?php include 'footer.php'; ?>
  <script src="../function.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
