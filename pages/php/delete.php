<?php
  if($_GET['action']=="delete"){
    $id = $_GET['id'];
    $query = "DELETE FROM products where id={$id}";
    $result = mysqli_query($con,$query);
    if($result){
      echo
      "
      <script>
        alert('$title is Successfully Deleted');
      </script>
      ";
    }
    else{
      echo
      "
      <script>
        alert('Deletion has failed');
      </script>
      ";
    }
  }
?>