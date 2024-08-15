<?php
  Session_start();

  if(!isset($_SESSION['username']))
  {
    $_SESSION['msg']="You have to login First";
    header('location:login.php');
  }

  if(isset($_GET['logout']))
  {
    session_destroy();
    unset($_SESSION['username']);
    header('location:login.php');
  }
?>