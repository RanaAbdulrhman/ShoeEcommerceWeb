<?php
session_start();
  include("connection.php");
  include("auth.php");
  $sql = "SELECT * FROM products";
  $products = $con->query($sql);
  
  if(isset($_GET['id']) && !isset($_POST['update'])){
    while($product = mysqli_fetch_assoc($products)){
      if ($product['id'] == $_GET['id']){
        $productId = $product["id"];
        $productTitle = $product['title'];
        $productDesc = $product['description'];
        $productPrice = intval($product['price']);
      }
    }
  }elseif(isset($_GET['id']) && isset($_POST['update'])){
    $id = $_GET['id'];
    $title = $_POST['title'];
    $desc = $_POST['description'];
    $price = intval($_POST['price']);
    $query = "UPDATE products SET title=\"{$title}\", description=\"{$desc}\", price={$price} WHERE id={$id}";
    $result = mysqli_query($con,$query);
    if($result){
      echo
      "
      <script>
        alert('$title is Successfully Updated');
      </script>
      ";
      header("refresh:1;url=../admin.php");
    }
    else{
      echo
      "
      <script>
        alert('$title has failed');
      </script>
      ";
    }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="../../css/admin-board.css">
    <link rel='shortcut icon' href="../favicon-32.png" type="image/png">
    <title>Admin Dashboard</title>
  </head>
  <body>
    <div class="container">
        <div class="card">
          <div class="card-header">
            <h3 class="products-header p-3">Edit product</h3>
          </div>
          <div class="card-body">
            <form method="post" action="update.php?id=<?=$_GET['id']?>" enctype="multipart/form-data">
              <div class="form-group">
                <label for="titleInput">Product Title</label>
                <input type="text" class="form-control bg-light" id="titleInput" name="title" value="<?=$productTitle?>" >
              </div>
              <div class="form-group">
                <label for="descInput">Product Description</label>
                <input type="text" class="form-control bg-light" id="descInput" name="description" value="<?=$productDesc?>">
              </div>
              <div class="form-group">
                <label for="priceInput">Product Price</label>
                <input type="number" class="form-control bg-light" id="priceInput" name="price" value="<?=$productPrice?>">
              </div>
              <button type = "submit" name="update" class="btn btn-primary my-3 float-end">Update</button>
            </form>    
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>

<?php

