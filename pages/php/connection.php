<?php 
  if(! $con = mysqli_connect('localhost', 'root')){
    die("failed to connect");
  }

  mysqli_select_db($con, 'ecommerce'); 
  
?>
