<?php
include "includes/dbh.php";
define('TITLE','College Fee Payment Setting');
define('PAGE','setting');
include "includes/header.php";
if(isset($_SESSION['admin_login']))
{
?>
<div class="wrapper">
   <!-- navbar -->
   <?php
 include "includes/nav.php";
 ?>
  <!-- /.navbar -->
  <?php 
include "includes/left_sidebar.php";
?>
<!-- Main Div -->
<div class="main">
<div class="bg-light mx-auto" id="sidenav" style="width:90%;height:100vh;">
<!-- Main Div -->
<div class="card-header text-dark mt-2"><h1 class="mt-2 font-weight-bold" >SETTING</h1><hr class="bg-info" style="height:2px;"></div>
<div class="col-sm-11  mx-auto"><!-- col-sm-11 div -->
<div class="col-sm-10 mx-auto"><!-- col-sm-10 div -->
<?php
if(isset($_SESSION['message']))
{
  echo $_SESSION['message'];
  unset($_SESSION['message']);
}
?>
<form action="" method="post" class="p-2 mt-2 shadow-lg bg-light" style="border:1px solid #ccc;">
  <!-- Personal Information area -->
<legend  class="scheduler-border text-center font-weight-bold shadow-lg">Change Password</legend>
<hr class="bg-success" style="height:1px;">
  <div class="form-group row">
    <label for="newpass" class="col-sm-2 col-form-label" style="font-size:14px;">New Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="new_pass" name="new_pass" placeholder="New Password" required >   </div>
  </div>
  <div class="form-group row">
    <label for="conpass" class="col-sm-2 col-form-label" style="font-size:14px;">Confirm Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="con_pass" name="con_pass" placeholder="Confirm Password" required>
    </div>
  </div>
 
  <div class="row">
 <div class="col-sm-6 mx-auto d-block ">
 <input type="submit" value="Submit" name="change_pass" class="btn btn-block btn-primary mb-2">
 </div>
 </div>
   <!-- End Personal Information area -->
</form>
</div><!-- col-sm-10 div -->
</div><!-- col-sm-11 div --> 
<!-- row -->
</div>
<!-- Row -->
<!-- Main Div -->
</div>
</div>
<!-- Main Div -->
<!-- ./wrapper -->
</div>
<!-- ./wrapper -->
 <!-- *Row  -->
 <footer class="mt-4 text-center text-white" style="width:100%;height:80px;background-image:linear-gradient(rgba(0,0,0,.5),rgba(0,0,0,.5));">
       School Fees Payment System | Brought To You By :
</footer> 
<?php
 include "includes/footer.php";
 // Is_login 
}else{
  header("Location:../login.php");
} // Is_login
?>
<?php
if(isset($_POST['change_pass']))
{
  $new_pass=$_POST['new_pass'];
  $con_pass=$_POST['con_pass'];
  $old_pass=mysqli_real_escape_string($conn,$old_pass);
  $new_pass=mysqli_real_escape_string($conn,$new_pass);
  $con_pass=mysqli_real_escape_string($conn,$con_pass);
//  if($new_pass="" || $con_pass="")
//  {

//  }
//  else{//required field
 
//  }
if($new_pass===$con_pass)
{
  $email=$_SESSION['admin_login'];
  $con_pass=password_hash($con_pass,PASSWORD_BCRYPT);
  $sql="update admin_registration set password='$con_pass' where email='$email'";
  $res=mysqli_query($conn,$sql);
  if($res)
  {
    header("Location:setting.php");
    $_SESSION['message']="<div class='alert alert-success text-white'>Password Successfully Changed</div>";
  }else{
    header("Location:setting.php");
    $_SESSION['message']="<div class='alert alert-danger text-white'>Something Went Wrong</div>";
  }


}else{
  header("Location:setting.php");
  $_SESSION['message']="<div class='alert alert-danger text-white'>Password Do Not Match</div>";
}
}
?>