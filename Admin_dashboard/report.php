<?php
include "includes/dbh.php";
define('TITLE','College Fee Payment Report');
define('PAGE','report');
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
<div class="bg-light mx-auto" style="width:90%;min-height:130vh;">
<!-- Main Div -->
<div class="card-header text-dark mt-2"><h1 class="mt-2 font-weight-bold" >REPORT</h1><hr class="bg-info" style="height:2px;"></div>
<!-- Search -->
<div class="row" style="margin-bottom:20px;">
<div class="col-md-12 ml-5 ">
<legend  class="scheduler-border">Search</legend>
<form class="form-inline" role="form" id="searchform">
  <div class="form-group">
    <label for="email">&nbsp; Name &nbsp;</label>
    <input type="text" class="form-control" id="student" name="student">
  </div>
  <div class="form-group">
    <label for="email"> &nbsp; Date Of Joining &nbsp; </label>
    <input type="text3" class="form-control" id="doj" name="doj" placeholder="dd-mm-yy">
  </div>
   
  
  <div class="form-group">
    <label for="email">&nbsp; Branch &nbsp;</label>
    <select  class="form-control" id="branch" name="branch" >
		<option value="" > &nbsp; Select Branch</option>
                                    <?php
									$sql = "select * from branch  order by branch.branch asc";
									$q = $conn->query($sql);
									
									while($r = $q->fetch_assoc())
									{
									echo '<option value="'.$r['id'].'"  '.(($branch==$r['id'])?'selected="selected"':'').'>'.$r['branch'].'</option>';
									}
									?>
	</select>
  </div> 
  <button type="button" class="btn btn-success btn-sm m-1 ml-2" id="find" > Find </button>
  <button type="reset" class="btn btn-danger btn-sm" id="clear" > Clear </button>
</form>
</div>
</div>
<!-- Search -->

<div class="panel panel-default">                  
  <div class="panel-body">
    <div class="table-sorting table-responsive">
    <nav class="navbar navbar-light bg-light">
    <form action="" class="form-inline">
    <div class="panel-heading">
      <h7  class="ml-3 text-center">Manage Fees </h7>
      </div>
    </form>
    </nav>
    
    
    <table class="table table-striped table-bordered table-hover" id="tSortable22">
        <thead>
            <tr style="font-size:15px;">
                <th>#</th>
                <th>Name/Contact</th>
                <th>Fees</th>
                <th>Balance</th>
                <th>Branch</th>
                <th>Batch</th>
                <th>Action</th>
            </tr>
        </thead>
        <?php 
        if(isset($_GET['page']))
        {
          $page=$_GET['page'];
          $page=mysqli_real_escape_string($conn,$page);
          $page=htmlentities($page);
        }
        else{
          $page=1;
        }
        $sql="select * from students";
        $res=mysqli_query($conn,$sql);
        $count=mysqli_num_rows($res);
        $page_row=8;
        $no_of_page=ceil($count/$page_row);
        $start=($page-1)*$page_row;
        $sql="select * from students order by id limit $start,$page_row";
        $res=mysqli_query($conn,$sql);
        if(mysqli_num_rows($res)>0)
        {
        ?>
          <tbody>
          <?php
          $number=1;
          while($row=mysqli_fetch_assoc($res))
          {
          ?>
          <tr style="font-size:14px;">
                <td><?php echo $number;?></td>
                <td><?php echo $row['std_name']; ?><br>
                <?php echo $row['contact']; ?></td>
                <td><?php echo $row['tfees']; ?></td>
                <td><?php echo $row['bfees']; ?></td>
                <td><?php echo $row['branch']; ?></td>
                <td> <?php echo $row['doj']; ?></td>
                <td scope="col">
               <form action="php/fee_details.php?id=<?php echo $row['id'];?>" method="post" class="d-inline">
             <button type="submit" class="btn badge  bg-primary" value="edit" 
             name="student_edit"><i class="fas fa-dollar-sign">Fee Detais</i></button></form>
                </td>		
                </tr>
          </tbody>
          <?php
          $number++;
                 }
                ?>
          <?php
                 }
                ?>
      </table>
      <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li 
          <?php
          if($page==1)
          echo "class='disabled page-item'";
          ?>
           ><a class="page-link" href="report.php?page=<?php echo $page-1;?>">Previous</a></li>
        <?php
        for($i=1;$i<=$no_of_page;$i++)
        {?>
          <li  
          <?php
          if($page==$i)
          echo "class='active page-item'";
          ?>
          ><a class="page-link" href="report.php?page=<?php echo $i; ?>"><?php echo $i ?> </a></li>
        <?php }?>
          <li 
          <?php
          if($page==$no_of_page)
          echo "class='disabled page-item'";
          ?>><a class="page-link" href="report.php?page=<?php echo $page+1;?>">Next</a></li>
        </ul>
      </nav>
        </div>
    </div>
</div>

<!-- row -->
</div>
<!-- Row -->
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
 <?php include "includes/footer.php";
  // Is_login 
}else{
   header("Location:../login.php");
} // Is_login
?>