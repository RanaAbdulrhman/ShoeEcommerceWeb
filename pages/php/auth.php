<?php 
  if(!isset($_SESSION['auth'])){
    $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  
    if($curPageName == "admin.php"){
      $_SESSION['message']="You have to log in first";
      header("Location: log-in.php");
    }else{
      $_SESSION['message']="You have to log in first";
      header("Location: ../log-in.php");
    }

  }
?>