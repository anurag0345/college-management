<?php
include "includes/dbh.php";
 if(isset($_SESSION['std_login_id'])){
    unset($_SESSION['std_login_id']);
    session_destroy();
    header("Location:std_login.php");
    $_SESSION['message']="<div class='alert alert-light text-success'><i class='fas fa-check'></i> You Are Successfullt Logout !</div>"; 
 }else{
   unset($_SESSION['std_login_id']);
   session_destroy();
   header("Location:std_login.php");
   $_SESSION['message']="<div class='alert alert-light text-success'><i class='fas fa-check text-success'></i> You Are Successfullt Logout !</div>";

 }
?>