<?php
include "dbh.php";
define('TITLE',' College Fee Payment Fee Detail');
include "header.php";
?>
 <!-- navbar -->
   <?php 
include "../includes/nav.php";
include "left_area.php";
?>
  <!-- /.navbar -->
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
<div class="main ">
<div class="bg-white mx-auto p-2 mt-2" style="width:90%; height:100vh;">
<!-- Main Div -->
<div class="card-header text-dark mt-2"><h5 class="mt-2 " >Fee Report</h5></div>
  <div class="form-row m-1 mt-2"><!-- //start row -->
<table class="table table-bordered " style="border:2px solid #ccc;">
            <tr >
                <th>Name</th>
                <td><?php echo $row['std_name']; ?></td>
                <th>Branch</th>
                <td><?php echo $row['branch']; ?></td>
            </tr>
            <tr >
                <th>Contact</th>
                <td><?php echo $row['contact']; ?></td>
                <th>Joining Date</th>
                <td><?php echo $row['doj']; ?></td>
            </tr>
</table >
  </div><!-- //End row -->
  <div class="card-header text-dark mt-2"><h5 class="mt-2 " >Fee Info</h5></div>
  <div class="form-row m-1 mt-2"><!-- //start row -->
<table class="table table-bordered " style="border:2px solid #ccc;">
            <tr>
                <th>Date</th>
                <th>Paid</th>
                <th>Remark</th>
            </tr>
            <tr>
                <td>02-07-2018</td>
                <td>123</td>
                <td><?php echo $row['fee_remark']; ?></td>
            </tr>
</table >
<table class="table">
            <tr>
                <th>Total Fees:</th>
                <td><?php echo $row['std_total']; ?></td>
            </tr>
            <tr>
                <th>Total Paid:</th>
                <td>2500</td>
            </tr>
            <tr>
                <th>Balance:</th>
                <td>0</td>
            </tr>
</table >
  </div>
  <!-- //End row -->
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
 include "footer.php";
?>
<!-- id Codeing -->
<?php
}
}
?>
<!-- id Codeing -->