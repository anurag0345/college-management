<?php
include "../includes/dbh.php";
define('TITLE',' College Fee Payment Add Studeent');
include "includes/header.php";
?>
<div class="wrapper">
 
   <!-- navbar -->
   <?php 
include "../includes/nav.php";
?>
  <!-- /.navbar -->
  <?php 
include "includes/left_area.php";
?>
<?php
if(isset($_GET['id']))
{
  $id=$_GET['id'];
  $id=mysqli_real_escape_string($conn,$id);
  $sql="select * from student where id=$id";
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)>0)
  {
    $row=mysqli_fetch_assoc($result);
  }
}
?>
<!-- Main Div -->
<div class="main ">
<div class="bg-white mx-auto p-2 mt-2" style="width:90%;">
<!-- Main Div -->
<div class="card-header text-dark mt-2"><h1 class="mt-2 font-weight-bold" >Take Fees</h1><hr class="bg-info" style="height:2px;"></div>
<?php
if(isset($_SESSION['message']))
{
  echo $_SESSION['message'];
  unset($_SESSION['message']);
}
?>
<form action="take_fees_bca.php?id=<?php echo $row['id'];?>" method="post" class="">
  <div class="form-row m-1 mt-2"><!-- //start row -->
    <div class="col-md-6 mb-3">
        <label for="name" class="col-form-label">Name</label>
       <input type="text" class="form-control" id="name" name="name" disabled value="<?php echo $row['std_name']; ?>">
    </div>
    <div class="col-md-6 mb-3">
        <label for="contact" class="col-form-label">Contact</label>
       <input type="text" class="form-control" id="contact" name="contact" disabled  value="<?php echo $row['contact']; ?>">
    </div>

  <div class="col-md-6 mb-3">
        <label for="tution_fee" class="col-form-label">Tution Fee</label>
       <input type="text" class="form-control" id="" name="tution_fee" disabled  value="<?php echo $row['tfees']; ?>">
 </div>
  <div class="col-md-6 mb-3">
        <label for="T&D Fee" class="col-form-label">T&D Fee</label>
       <input type="text" class="form-control" id="tdFee" name="tdFee" disabled  value="<?php echo $row['td_fees']; ?>">
  </div>
  <div class="col-md-6 mb-3">
        <label for="Sports Fee" class="col-form-label">Sports Fee</label>
       <input type="text" class="form-control" id="sports_fee" name="sports_fee" disabled  value="<?php echo $row['sfees']; ?>">
 </div>
  <div class="col-md-6 mb-3">
        <label for="Balance" class="col-form-label">Balance</label>
       <input type="text" class="form-control" id="balance" name="balance" disabled  value="<?php echo $row['bfee']; ?>">
  </div>
  <div class="col-md-6 mb-3">
        <label for="Paid" class="col-form-label">Paid</label>
       <input type="text" class="form-control" id="paid" name="paid" placeholder="Paid">
  </div>
  <div class="col-md-6 mb-3">
        <label for="Date" class="col-form-label">Date</label>
       <input type="text" class="form-control" id="date" name="date" placeholder="Date">
  </div>
  <div class="col-md-12 mb-3">
        <label for="remark" class="col-form-label">Remark</label>
       <textarea class="form-control" id="remark" name="remark" placeholder="Remark" style="resize:none;"></textarea>
  </div>
  </div><!-- //End row -->
  <button  type="submit"  class="col-sm-4 mx-auto d-block btn btn-danger p-2 ml-2 mb-2"name="submit_fee">Submit Fee</button>
</form>
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
<!-- id Codeing -->
<?php


?>
<!-- id Codeing -->
<?php
 include "includes/footer.php";
 ?>
 
 <?php
if(isset($_POST['submit_fee']))
{
  
}
?>