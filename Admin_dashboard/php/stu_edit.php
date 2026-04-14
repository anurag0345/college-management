<?php
include "dbh.php";
define('TITLE',' College Fee Payment Edit Studeent');
include "header.php";
?>
<!-- navbar -->
<?php
 include "../includes/nav.php";
 ?>
<!-- /.navbar -->
<?php 
include "left_area.php";
?>
<?php
if(isset($_GET['id']))
{
  $id=$_GET['id'];
  $id=mysqli_real_escape_string($conn,$id);
  $sql="select * from students where id=$id";
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)>0)
  {
    $row=mysqli_fetch_assoc($result);
?>
<!-- Main Div -->
<div class="main mt-2 ">
<div class="bg-white mx-auto p-2" style="width:90%;">
<!-- Main Div -->
<div class="card-header text-dark mt-2"><h1 class="mt-2 font-weight-bold" >Update Student Record</h1><hr class="bg-info" style="height:2px;"></div>
<div class="col-sm-11  mx-auto"><!-- col-sm-11 div -->
<div class="col-sm-10 mx-auto"><!-- col-sm-10 div -->
<?php
if(isset($_SESSION['message']))
{
  echo $_SESSION['message'];
  unset($_SESSION['message']);
}
?>
<form action="" method="post" class="p-2 mt-2 mb-5 shadow-lg bg-light" style="border:1px solid #ccc;">
  <!-- Personal Information area -->
<legend  class="scheduler-border text-center font-weight-bold shadow-lg">Personal Information</legend>
<hr class="bg-success" style="height:1px;">
  <div class="form-group row">
    <label for="inputname1" class="col-sm-2 col-form-label" id="lable_name">Name <span class="text-danger">*</span></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="std_name" name="name" value="<?php echo $row['std_name']; ?>"" >
      <h10 class="" style="" id='valiadte_error4'></h10>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputfathername" class="col-sm-2 col-form-label">Father's <span class="text-danger">*</span></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="father_name" name="father_name" value="<?php echo $row['father_name']; ?>"">
      <h10 class="" style="" id='valiadte_error5'></h10>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputcontact" class="col-sm-2 col-form-label">Contact <span class="text-danger">*</span></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="contact" name="contact" value="<?php echo $row['contact']; ?>"">
      <h10 class="" style="" id='valiadte_error6'></h10>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputdoj" class="col-sm-2 col-form-label">Gender <span class="text-danger">*</span></label>
    <div class="col-sm-10">
      <input type="radio"id="gender" name="gender"> Male 
      <input type="radio"id="gender" name="gender"> Female
   
    </div>
  </div>
  <div class="form-group row">
    <label for="inputbranch" class="col-sm-2 col-form-label">Branch <span class="text-danger" >*</span></label>
        <div class="col-sm-10">
            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref"name="branch">
                <option selected><?php echo $row['branch']; ?></option>
                <option>BCA</option>
                <option>BBA</option>
                <option>MBA</option>
                <option>Bcom</option>
                <option>Bsc it</option>
            </select>
        </div>
  </div>
  <div class="form-group row">
    <label for="inputdoj" class="col-sm-2 col-form-label">Doj <span class="text-danger">*</span></label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="doj" name="doj" value="<?php echo $row['doj']; ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="std_year" class="col-sm-2 col-form-label">Year <span class="text-danger">*</span></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="std_year" name="std_year" value="<?php echo $row['std_year']; ?>">
      <h10 class="" style="" id='valiadte_error6'></h10>
    </div>
  </div>
  <div class="form-group row">
    <label for="batch" class="col-sm-2 col-form-label">Batch <span class="text-danger">*</span></label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="std_batch" name="std_batch" value="<?php echo $row['std_batch']; ?>">
      <h10 class="" style="" id='valiadte_error6'></h10>
    </div>
  </div>
   <!-- End Personal Information area -->
 <!-- start fees Information area -->
<legend  class="scheduler-border text-center font-weight-bold shadow-lg">Fee Information</legend>
<hr class="bg-success" style="height:1px;">
  <div class="form-group row">
    <label for="tfees" class="col-sm-2 col-form-label">Tution Fees <span class="text-danger">*</span></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="tution_fees" name="tution_fees" value="<?php echo $row['tfees']; ?>">
      <h10 class="" style="" id='valiadte_error9'></h10>
    </div>
  </div>
  <div class="form-group row">
    <label for="t&d" class="col-sm-2 col-form-label">T&D Fees <span class="text-danger">*</span></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="td_fees" name="td_fees" value="<?php echo $row['tdfees']; ?>">
      <h10 class="" style="" id='valiadte_error10'></h10>
    </div>
  </div>
  <div class="form-group row">
    <label for="sportsfees" class="col-sm-2 col-form-label">Sports Fees <span class="text-danger">*</span></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="sports" name="sports"  value="<?php echo $row['sfees']; ?>">
      <h10 class="" style="" id='valiadte_error11'></h10>
    </div>
  </div>
  <div class="form-group row">
    <label for="insurance" class="col-sm-2 col-form-label">Insurance <span class="text-danger">*</span></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="insurance" name="insurance" value="<?php echo $row['ifees']; ?>">
      <h10 class="" style="" id='valiadte_error12'></h10>
    </div>
  </div>
  <div class="form-group row">
    <label for="Cautionmoney" class="col-sm-2 col-form-label">Caution <span class="text-danger">*</span></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="caution_money" name="c_money" value="<?php echo $row['c_money']; ?>">
      <h10 class="" style="" id='valiadte_error13'></h10>
    </div>
  </div>
  <div class="form-group row">
    <label for="OtherFee/Welfare" class="col-sm-2 col-form-label">Other Fee/Welfare <span class="text-danger">*</span></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="Fee_Welfare" name="w_fee" value="<?php echo $row['wfees']; ?>">
      <h10 class="" style="" id='valiadte_error14'></h10>
    </div>
  </div>
  <div class="form-group row">
    <label for="Advancefee*" class="col-sm-2 col-form-label">Advance Fee <span class="text-danger">*</span></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="Advance_Fee" name="a_fee" value="<?php echo $row['afees']; ?>">
      <h10 class="" style="" id='valiadte_error15'></h10>
    </div>
  </div>
  <div class="form-group row">
    <label for="Balance" class="col-sm-2 col-form-label">Balance</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="balance" name="b_fee" value="<?php echo $row['bfees']; ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="Balance" class="col-sm-2 col-form-label">Total</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="std_total" name="std_total" value="<?php echo $row['std_total']; ?>" autocomplete="off">
    </div>
  </div>
  <div class="form-group row">
    <label for="Balance" class="col-sm-2 col-form-label">Fee Remark</label>
    <div class="col-sm-10">
      <textarea class="form-control" id="fee_remark" name="remark"  style="resize:none;"><?php echo $row['fee_remark']; ?></textarea>
    </div>
  </div>
  <!-- End fees Information area -->
   <!-- Start Optional Information area -->
  <legend  class="scheduler-border text-center font-weight-bold shadow-lg">Optional Information</legend>
<hr class="bg-success" style="height:1px;">
  <div class="form-group row">
    <label for="inputname1" class="col-sm-2 col-form-label">About Student</label>
    <div class="col-sm-10">
      <textarea class="form-control" id="about_student" name="about_student" style="resize:none;"><?php echo $row['abt_std']; ?></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="EmailId" class="col-sm-2 col-form-label">Email Id</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="email_id" name="email_id" value="<?php echo $row['email']; ?>">
      <h10 class="" style="" id='valiadte_error16'></h10>
    </div>
  </div>

  <div class="form-group row">
    <label for="EmailId" class="col-sm-2 col-form-label">Username</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="username" name="username" value="<?php echo $row['username']; ?>">
      <h10 class="" style="" id='valiadte_error16'></h10>
    </div>
  </div>

  <div class="form-group row">
    <label for="EmailId" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="password" name="password" value="<?php echo $row['password']; ?>">
      <h10 class="" style="" id='valiadte_error16'></h10>
    </div>
  </div>
 <div class="row">
 <div class="col-sm-4 mx-auto d-block ">
 <input type="submit" value="Update Student" id="Update Student" name="update" class="btn btn-block btn-success mb-2">
 </div>
 </div>
   <!-- End Optional Information area -->
</form>

    <!-- row -->
  </div>
  <!-- Row -->
  <!-- Main Div -->
</div>
<!-- Main Div -->

<!-- ./wrapper -->
<!-- *Row  -->
<footer class="mt-4 text-center text-white"
  style="width:100%;height:80px;background-image:linear-gradient(rgba(0,0,0,.5),rgba(0,0,0,.5));">
  School Fees Payment System | Brought To You By :
</footer>
<?php
 include "footer.php";
?>
<!-- id Codeing -->
<?php
 }else{
  header("Location:../add_student.php");
}
}
?>
<!-- id Codeing -->
<!-- Php Update  Coding -->
<?php
if(isset($_POST['update']))
{//Start Isset;
  $name=$_POST['name'];
  $father_name=$_POST['father_name'];
  $contact=$_POST['contact'];
  $branch=$_POST['branch'];
  $std_year=$_POST['std_year'];
  $std_total=$_POST['std_total'];
  $username=$_POST['username'];
  $password=$_POST['password'];
  $about_student=$_POST['about_student'];
  $remark=$_POST['remark'];
  $email_id=$_POST['email_id'];
  $t_fees = $_POST['tution_fees'];
  $td_fees = $_POST['td_fees'];
  $sport=$_POST['sports'];
  $ifees = $_POST['insurance'];
  $c_money = $_POST['c_money'];
  $ow_fee = $_POST['w_fee'];
  $a_fees=$_POST['a_fee'];
  $b_fee=$_POST['b_fee'];

    $sql="update students set std_name='$name',father_name='$father_name',contact='$contact',
    branch='$branch',std_year='$std_year',username='$username',password='$password',abt_std='$about_student',
    email='$email_id',tfees=$t_fees,sfees=$sport,tdfees=$td_fees,ifees=$ifees,c_money=$c_money,wfees=$ow_fee,
    afees=$a_fees,bfees=$b_fee,std_total=$std_total where id=$id ";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
      header("Location:stu_edit.php?id=$id");
    $_SESSION['message']="<div class='alert alert-success text-white'><i class='fas fa-check'></i> Student Update Succesfully.</div>";
  
    }else{
      header("Location:stu_edit.php");
      $_SESSION['message']="<div class='alert alert-danger text-white'>Something Went Wrong</div>";
    
    }
}//close Isset

?>