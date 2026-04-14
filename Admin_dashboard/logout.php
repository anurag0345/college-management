<?php
include "includes/dbh.php";
if(isset($_SESSION['admin_login']))
{
  unset($_SESSION['admin_login']);
  session_destroy();
  header("Location:../login.php");
}else{
  header("Location:../login.php");
} 
?>
