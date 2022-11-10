<?php
session_start();
  include("connection.php");
  include("auth.php");
    if(isset($_POST["submit"])){
      if($_FILES["image"]["error"] == 4){
        echo
        "<script> alert('Image Does Not Exist'); </script>"
        ;
      }
      else{
        $imageName = $_FILES["image"]["name"];
        $tmpName = $_FILES["image"]["tmp_name"];
        move_uploaded_file($tmpName, '/Applications/XAMPP/xamppfiles/htdocs/ShoeEcommerceWeb/resouces/images/product_images/'.$imageName);
  
        $productTitle = $_POST['title'];
        $productDesc = $_POST['description'];
        $productPrice = intval($_POST['price']);
  
        $query = "INSERT INTO products (title,description,price,image) VALUES('$productTitle', '$productDesc', $productPrice,'$imageName')";
        $con->query($query);
        echo
        "
        <script>
          alert('$productTitle is Successfully Added');
        </script>
        ";
        header("refresh:1;url=admin.php");
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
            <h3 class="products-header p-3">Add product</h3>
          </div>
          <div class="card-body">
            <form method="post" action="add-product.php" enctype="multipart/form-data">
              <div class="form-group">
                <label for="titleInput">Product Title</label>
                <input type="text" class="form-control" id="titleInput" name="title" placeholder="Enter Title">
              </div>
              <div class="form-group">
                <label for="descInput">Product Description</label>
                <input type="text" class="form-control" id="descInput" name="description" placeholder="Enter Description">
              </div>
              <div class="form-group">
                <label for="priceInput">Product Price</label>
                <input type="number" class="form-control" id="priceInput" name="price" placeholder="Enter Price">
              </div>
              <div class="form-group">
                <label for="imageInput">Product Image</label>
                <input type="file" name="image" id="imageInput" class="form-control" accept=".jpg, .jpeg, .png, .webp" value="">
              </div>
              <button type = "submit" name="submit" class="btn btn-primary my-3 float-end">Submit</button>
            </form>    
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>

<?php

