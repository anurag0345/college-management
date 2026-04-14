<?php
define('TITLE',' College Fee Payment Add Studeent');
define('PAGE','add');
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
<div class="main mt-2 ">
<div class="bg-white mx-auto p-2" style="width:90%;">
<!-- Main Div -->
<div class="card-header text-dark mt-2"><h1 class="mt-2 font-weight-bold" >ADD STUDENTS</h1><hr class="bg-info" style="height:2px;"></div>
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
      <input type="text" class="form-control" id="std_name" name="name" placeholder="Name" autocomplete="off" >
      <h10 class="" style="" id='valiadte_error4'></h10>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputfathername" class="col-sm-2 col-form-label">Father's <span class="text-danger">*</span></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="father_name" name="father_name" placeholder="Father Name" autocomplete="off">
      <h10 class="" style="" id='valiadte_error5'></h10>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputcontact" class="col-sm-2 col-form-label">Contact <span class="text-danger">*</span></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="contact" name="contact" placeholder="Contact" autocomplete="off">
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
                <option selected>Select Branch</option>
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
      <input type="date" class="form-control" id="doj" name="doj" placeholder="Doj" autocomplete="off">
    </div>
  </div>

  <div class="form-group row">
    <label for="std_year" class="col-sm-2 col-form-label">Year <span class="text-danger">*</span></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="std_year" name="std_year" placeholder="Student Year" autocomplete="off">
      <h10 class="" style="" id='valiadte_error6'></h10>
    </div>
  </div>
  <div class="form-group row">
    <label for="batch" class="col-sm-2 col-form-label">Batch <span class="text-danger">*</span></label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="std_batch" name="std_batch" placeholder="Student Batch" autocomplete="off">
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
      <input type="text" class="form-control" id="tution_fees" name="tution_fees" placeholder="Tution Fees" autocomplete="off">
      <h10 class="" style="" id='valiadte_error9'></h10>
    </div>
  </div>
  <div class="form-group row">
    <label for="t&d" class="col-sm-2 col-form-label">T&D Fees <span class="text-danger">*</span></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="td_fees" name="td_fees" placeholder="T&D" autocomplete="off">
      <h10 class="" style="" id='valiadte_error10'></h10>
    </div>
  </div>
  <div class="form-group row">
    <label for="sportsfees" class="col-sm-2 col-form-label">Sports Fees <span class="text-danger">*</span></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="sports" name="sports"  placeholder="Sports Fees" autocomplete="off">
      <h10 class="" style="" id='valiadte_error11'></h10>
    </div>
  </div>
  <div class="form-group row">
    <label for="insurance" class="col-sm-2 col-form-label">Insurance <span class="text-danger">*</span></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="insurance" name="insurance" placeholder="Insurance Fees" autocomplete="off">
      <h10 class="" style="" id='valiadte_error12'></h10>
    </div>
  </div>
  <div class="form-group row">
    <label for="Cautionmoney" class="col-sm-2 col-form-label">Caution <span class="text-danger">*</span></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="caution_money" name="c_money" placeholder="Caution Money" autocomplete="off">
      <h10 class="" style="" id='valiadte_error13'></h10>
    </div>
  </div>
  <div class="form-group row">
    <label for="OtherFee/Welfare" class="col-sm-2 col-form-label">Other Fee/Welfare <span class="text-danger">*</span></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="Fee_Welfare" name="w_fee" placeholder="Fee/Welfare" autocomplete="off">
      <h10 class="" style="" id='valiadte_error14'></h10>
    </div>
  </div>
  <div class="form-group row">
    <label for="Advancefee*" class="col-sm-2 col-form-label">Advance Fee <span class="text-danger">*</span></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="Advance_Fee" name="a_fee" placeholder="Advance Fee" autocomplete="off">
      <h10 class="" style="" id='valiadte_error15'></h10>
    </div>
  </div>
  <div class="form-group row">
    <label for="Balance" class="col-sm-2 col-form-label">Balance</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="balance" name="b_fee" placeholder="0" autocomplete="off">
    </div>
  </div>
  <div class="form-group row">
    <label for="Balance" class="col-sm-2 col-form-label">Total</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="std_total" name="std_total" placeholder="0" autocomplete="off">
    </div>
  </div>
  <div class="form-group row">
    <label for="Balance" class="col-sm-2 col-form-label">Fee Remark</label>
    <div class="col-sm-10">
      <textarea class="form-control" id="fee_remark" name="remark" placeholder="" style="resize:none;"></textarea>
    </div>
  </div>
  <!-- End fees Information area -->
   <!-- Start Optional Information area -->
  <legend  class="scheduler-border text-center font-weight-bold shadow-lg">Optional Information</legend>
<hr class="bg-success" style="height:1px;">
  <div class="form-group row">
    <label for="inputname1" class="col-sm-2 col-form-label">About Student</label>
    <div class="col-sm-10">
      <textarea class="form-control" id="about_student" name="about_student" placeholder="About Student" style="resize:none;"></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="EmailId" class="col-sm-2 col-form-label">Email Id</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="email_id" name="email_id" placeholder="Email Id" autocomplete="off">
      <h10 class="" style="" id='valiadte_error16'></h10>
    </div>
  </div>

  <div class="form-group row">
    <label for="EmailId" class="col-sm-2 col-form-label">Username</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="username" name="username" placeholder="Enter Username" autocomplete="off">
      <h10 class="" style="" id='valiadte_error16'></h10>
    </div>
  </div>

  <div class="form-group row">
    <label for="EmailId" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="password" name="password" placeholder="Enter Password" autocomplete="off">
      <h10 class="" style="" id='valiadte_error16'></h10>
    </div>
  </div>
 <div class="row">
 <div class="col-sm-4 mx-auto d-block ">
 <input type="submit" value="Add Student" id="add_student" name="save" class="btn btn-block btn-success mb-2">
 </div>
 </div>
   <!-- End Optional Information area -->
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
 <footer class="bg-success mt-4 text-center bg-dark" style="width:100%;height:80px;">
       School Fees Payment System | Brought To You By : <a href="http://code-projects.org/" target="_blank">Projects</a>
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
if(isset($_POST['save']))
{//Start Isset
  $name=$_POST['name'];
  $father_name=$_POST['father_name'];
  $contact=$_POST['contact'];
  $branch=$_POST['branch'];
  $doj=$_POST['doj'];
  $std_year=$_POST['std_year'];
  $std_batch=$_POST['std_batch'];
  $tfees=$_POST['tution_fees'];
  $t_d_fees=$_POST['td_fees'];
  $sports=$_POST['sports'];
  $insurance=$_POST['insurance'];
  $c_money=$_POST['c_money'];
  $w_fee=$_POST['w_fee'];
  $a_fee=$_POST['a_fee'];
  $b_fee=$_POST['b_fee'];
  $std_total=$_POST['std_total'];
  $fee_remark=$_POST['remark'];
  $about_student=$_POST['about_student'];
  $email_id=$_POST['email_id'];
  $username=$_POST['username'];
  $password=$_POST['password'];

  if($branch==""|| $doj=="")
   {//Check All Field Required
    header("Location:add_student.php");
    $_SESSION['message']="<div class='alert text-white' style='background:red;'>All Fields Are Required.</div>";
   }//Check All Field Required
   else{//Check All Field Required
    $sql="insert into students (std_name,father_name,contact,branch,doj,std_year,std_batch,tfees,tdfees,
    sfees,ifees,c_money,wfees,afees,bfees,std_total,fee_remark,abt_std,email,username,password) values('$name','$father_name','$contact','$branch','$doj',
    '$std_year',$std_batch,$tfees,$t_d_fees,$sports,$insurance,$c_money,$w_fee,$a_fee,$b_fee,$std_total,'$fee_remark','$about_student','$email_id','$username','$password')";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
      header("Location:add_student.php");
    $_SESSION['message']="<div class='alert alert-success text-white'>Student Added Succesfully</div>";
    }else{
      header("Location:add_student.php");
      $_SESSION['message']="<div class='alert alert-danger text-white'>Something Went Wrong</div>";
    }
   }//End Check All Field Required
}//close Isset

?>
 