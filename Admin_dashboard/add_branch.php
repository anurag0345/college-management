<?php
define('TITLE',' College Fee Payment Add Branch');
define('PAGE','add_branch');
include "includes/header.php";
include "includes/dbh.php";
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
<div class="main ">
<div class="bg-light mx-auto" style="width:90%;height:100vh;">
<!-- Main Div -->
<div class="card-header text-dark mt-2"><h1 class="mt-2 font-weight-bold" >COURSE</h1><hr class="bg-info" style="height:2px;"></div>
<div class="col-sm-11  mx-auto"><!-- col-sm-11 div -->
<div class="col-sm-10 mx-auto"><!-- col-sm-10 div -->

<form action="" method="post" class="p-2 mt-2 shadow-lg bg-light " style="border:1px solid #ccc; color:black;">
  <!-- Personal Information area -->
<legend  class="scheduler-border text-center font-weight-bold shadow-lg">Add Course</legend>
<hr class="bg-success" style="height:1px;">
<!-- <div class="alert text-danger" style="" id='valiadte_error'></div> -->
<?php
if(isset($_SESSION['message']))
{
  echo $_SESSION['message'];
  unset($_SESSION['message']);
}
?>
  <div class="form-group row">
    <label for="branchname" class="col-sm-2 col-form-label">Branch</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="branch" name="branch" placeholder="Branch">
      <h9 class="" style="" id='valiadte_error1'></h9>
    </div>
   
  </div>
  <div class="form-group row">
    <label for="address" class="col-sm-2 col-form-label">Address  </label>
    <div class="col-sm-10">
      <textarea class="form-control" id="address" name="address" placeholder="Address" style="resize:none;"></textarea>
      <h9 class="" style="" id='valiadte_error2'></h9>
    </div>
  </div>
  <div class="form-group row">
    <label for="detail" class="col-sm-2 col-form-label">Detail </i></label>
    <div class="col-sm-10">
      <textarea class="form-control" id="detail" name="detail" placeholder="Detail" style="resize:none;"></textarea>
      <h9 class="" style="" id='valiadte_error3'></h9>
    </div>
  </div>
  <div class="row">
 <div class="col-sm-4 mx-auto d-block ">
 <input type="submit" value="Save" name="add_course" id="add_course" class="btn btn-block btn-primary mb-2">
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
<!-- Main Div -->
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

<!-- PHP Code -->

<?php
if(isset($_POST['add_course']))
{//Start Isset
  $branch=$_POST['branch'];
  $address=$_POST['address'];
  $detail=$_POST['detail'];
  $branch=mysqli_real_escape_string($conn,$branch);
  $address=mysqli_real_escape_string($conn,$address);
  $detail=mysqli_real_escape_string($conn,$detail);
    $sql="insert into branch (branch,address,detail) values('$branch','$address','$detail')";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
      header("Location:add_branch.php");
    $_SESSION['message']="<div class='alert text-white'style='background:green;'><i class='fas fa-check text-white'></i> Course Added Succesfully!</div>";
  
    }else{
      header("Location:add_branch.php");
      $_SESSION['message']="<div class='alert text-white' style='background:red;'> <i class='fas fa-times text-danger'></i> Something Went Wrong!</div>";
    
    }
}//close Isset

?>
 