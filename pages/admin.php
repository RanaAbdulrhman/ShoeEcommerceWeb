<?php
session_start();
  include("php/connection.php");
  include("php/auth.php");
  include("php/delete.php");

  $sql = "SELECT * FROM products";
  $products = $con->query($sql);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/admin-board.css">
    <link rel='shortcut icon' href="../favicon-32.png" type="image/png">
    <title>Admin Dashboard</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-md fixed-top px-5 py-3 bg-white">
    <a class="navbar-brand mr-auto" href="../index.php">
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
          <a class="nav-link" href="products.php">Products</a>
        </li>
        <li class="nav-item px-4">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item px-4">
          <a class="nav-link" href="#">Contact Us</a>
        </li>
      </ul>
      <div class="right d-flex justify-content-center align-items-center gap-4">
        <a href="php/logout.php" style="text-decoration: none;" class="btn btn-outline-secondary float-end">
          Log out
        </a>
      </div>
    </div>
  </nav>
  <div id="godown"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="card h-100 side-nav">
            <div class="card-header p-4">
              <h3 class="products-header ms-4">Admin Board</h3>
            </div>
            <div class="card-body">
              <h6 class="mt-5">Admin Email</h6>
              <p><?=$_SESSION['user_email']?></p>
              <h6 class="mt-5">Login Time</h6>
              <p><?=$_SESSION['login-time']?></p>
            </div>
          </div>
        </div>

        <div class="col-md-9">
          <div class="card mb-3">
            <div class="card-body p-4">
              <div class="row">
                <div class="col-md-10">
                  <h3 class="products-header">Add new Product</h3>
                  <p>Add new product to Nike website</p>
                </div>
                <div class="col-md-2 my-auto">
                  <a href="php/add-product.php" class="btn btn-primary btn-lg float-end me-4">&plus;</a>
                </div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header p-4">
              <h3 class="products-header">Dashboard</h3>
            </div>
            <div class="card-body p-4">
              <form method="post" action="cart.php?id=<?=$product['id']?>">
                  <table class="table table-striped">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">description</th>
                        <th scope="col">Price</th>
                        <th scope="col">Image Name</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                      $number = 1;
                      while($product = mysqli_fetch_assoc($products)):
                    ?>
                      <tr>
                        <th scope="row"><?= $number?></th>
                        <td><?= $product['title']?></td>
                        <td><?=$product['description']?></td>
                        <td><?=$product['price']?></td>
                        <td><?= $product['image']?></td>
                        <td>
                          <a href="php/update.php?id=<?=$product['id']?>" class="btn btn-success btn-sm ">
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                          </svg>
                          </a>
                        </td>
                        <td>
                          <a href="admin.php?action=delete&id=<?=$product['id']?>" class="btn btn-danger btn-sm ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                              <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                            </svg>                          
                          </a>
                        </td>
                      </tr>
                    <?php 
                      $number = $number+1;
                      endwhile; 
                    ?>
                    </tbody>
                  </table>
                </form>    
            </div>
         </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>