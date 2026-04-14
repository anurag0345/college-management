<?php
define('TITLE',' College Fee Payment Add Studeent');
define('PAGE','add');
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
<!-- Main Div -->
<div class="main ">
<div class="bg-white mx-auto p-2 mt-2" style="width:90%;">
<!-- Main Div -->
<div class="card-header text-dark mt-2"><h1 class="mt-2 font-weight-bold" >Take Fees</h1><hr class="bg-info" style="height:2px;"></div>
<form class="">
  <div class="form-row m-1 mt-2"><!-- //start row -->
    <div class="col-md-6 mb-3">
        <label for="name" class="col-form-label">Name</label>
       <input type="text" class="form-control" id="name" name="name" placeholder="Name">
    </div>
    <div class="col-md-6 mb-3">
        <label for="contact" class="col-form-label">Contact</label>
       <input type="text" class="form-control" id="contact" name="contact" placeholder="Contact">
    </div>
  <div class="col-md-4 mb-3">
        <label for="caution money" class="col-form-label">Caution Money</label>
       <input type="text" class="form-control" id="caution money" name="caution money" placeholder="Caution Money">
  </div>
  <div class="col-md-4 mb-3">
        <label for="tution_fee" class="col-form-label">Tution Fee</label>
       <input type="text" class="form-control" id="" name="tution_fee" placeholder="Tution Fee">
 </div>
  <div class="col-md-4 mb-3">
        <label for="Sports Fee" class="col-form-label">Sports Fee</label>
       <input type="text" class="form-control" id="sports_fee" name="sports_fee" placeholder="Sports Fee">
  </div>
  <div class="col-md-4 mb-3">
        <label for="tuition" class="col-form-label">Tuition</label>
       <input type="text" class="form-control" id="tuition" name="tuition" placeholder="Tuition">
  </div>
  <div class="col-md-4 mb-3">
        <label for="enrollment_fee" class="col-form-label">Enrollment Fee</label>
       <input type="text" class="form-control" id="enrollment_fee" name="enrollment_fee" placeholder="Enrollment Fee">
  </div>
  <div class="col-md-4 mb-3">
        <label for="welfare_fee" class="col-form-label">Welfare Fee</label>
       <input type="text" class="form-control" id="welfare_fee" name="welfare_fee" placeholder="Welfare Fee">
  </div>
  <div class="col-md-4 mb-3">
        <label for="training_development" class="col-form-label">Training & Development</label>
       <input type="text" class="form-control" id="training_development" name="training_development" placeholder="Training & Development">
  </div>
  <div class="col-md-4 mb-3">
        <label for="insurance_fee" class="col-form-label">Insurance Fee</label>
       <input type="text" class="form-control" id="insurance_fee" name="insurance_fee" placeholder="Insurance Fee">
  </div>
  <div class="col-md-4 mb-3">
        <label for="university_development" class="col-form-label">Univ. Development</label>
       <input type="text" class="form-control" id="university_development" name="university_development" placeholder="University Development Fee">
  </div>
  <div class="col-md-4 mb-3">
        <label for="registration_fee" class="col-form-label">Univ. Registration Fee</label>
       <input type="text" class="form-control" id="registration_fee" name="registration_fee" placeholder="Univ. Registration Fee">
  </div>
  <div class="col-md-4 mb-3">
        <label for="exam_fees" class="col-form-label">Univ. Exam Fee</label>
       <input type="text" class="form-control" id="exam_fees" name="exam_fees" placeholder="Univ. Exam Fee">
  </div>
  <div class="col-md-4 mb-3">
        <label for="sports_extra_activities" class="col-form-label">Sports & Extra Curricular Activities</label>
       <input type="text" class="form-control" id="sports_extra_activities" name="sports_extra_activities" placeholder="Sports & Extra Curricular Activities">
  </div>
  
 
  </div><!-- //End row -->
  <button class="btn btn-primary ml-2 mb-2" type="submit">Submit Fee</button>
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
<?php
 include "../includes/footer.php";
?>