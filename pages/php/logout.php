<?php
session_start();
  include("connection.php");
  if(isset($_SESSION['auth'])){
    unset($_SESSION['auth']);
    unset($_SESSION['user_email']);
    $_SESSION['message']="Logged out successfully";
    header("Location: ../log-in.php");
    
  }