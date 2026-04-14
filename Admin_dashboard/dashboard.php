<?php
define('TITLE',' College Fee Payment Dashboard');
define('PAGE','dashboard');
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
<div class="mx-auto mt-2 shadow-lg " style="width:90%;min-height:125vh;">
<!-- Main Div -->
<div class="card-header text-white mt-2"><h1 class="mt-2 font-weight-bold" >DASHBOARD</h1><hr class="bg-white" style="height:2px;"></div>

<div class="row mx-5 mt-5 ">
<div class="col-sm-4  text-center">
     <div class="card text-white bg-primary  mb-3" style="max-width:18rem;">
     <a href="student.php" class="hover">
     <div class="card-body">
      <i class="fa fa-users fa-5x"></i>
      </div>
      <div class="card-header"><h5>Students</h5></div>
     </div>
     </a>
    </div>
 <!-- second column -->
 <div class="col-sm-4  text-center">
     <div class="card text-white bg-success mb-3 shadow-lg" style="max-width:18rem;">
      <a href="course.php" class="hover">
      <div class="card-body">
      <i class="fas fa-university fa-5x"></i>
     
      </div>
      <div class="card-header"><h5>Courses</h5></div>
      </a>
     </div>
    </div>
    <!-- End Second Column -->
     <!-- Third column -->
     <div class="col-sm-4  text-center">
     <div class="card text-white bg-danger shadow-lg mb-3" style="max-width:18rem;">
        <a href="report.php" class="hover">
        <div class="card-body">
        <i class="far fa-copy fa-5x"></i>
       </div>
       <div class="card-header"><h5>Report</h5></div>
        </a>
     </div>
    </div>
    </div>
    <!-- End Third Column -->
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