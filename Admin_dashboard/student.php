<?php
include "includes/dbh.php";
define('TITLE',' College Fee Payment Student');
define('PAGE','student');
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
  <div class="main ">
    <div class="bg-light mx-auto" style="width:90%;min-height:130vh;">
      <!-- Main Div -->
      <div class="card-header text-dark mt-2">
        <h1 class="mt-2 font-weight-bold">STUDENTS</h1>
        <hr class="bg-info" style="height:2px;">
      </div>
      <div class="panel panel-default">
      <!-- <h6 class="scheduler-border ml-2 font-weight-bold">Manage Student </h6> -->
        <div class="panel-body">
          <div class="table-sorting table-responsive">
            <nav class="navbar navbar-light bg-light">
              <!-- Search -->
              <div class="row" style="margin-bottom:20px;">
                <div class="col-md-12 ml-5 ">
                  <legend class="scheduler-border">Search </legend>
                  <form class="form-inline" role="form" id="searchform">
                    <div class="form-group">
                      <label for="email">&nbsp; Name &nbsp;</label>
                      <input type="text" class="form-control" id="student" name="student">
                    </div>
                    <div class="form-group">
                      <label for="email">&nbsp; Date Of Joining&nbsp; </label>
                      <input type="text" class="form-control" id="doj" name="doj" placeholder="dd-mm-yy">
                    </div>


                    <div class="form-group">
                      <label for="email"> &nbsp; Branch &nbsp; </label>
                      <select class="form-control" id="branch" name="branch">
                        <option value="">&nbsp;Select Branch &nbsp;</option>
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
                    <button type="button" class="btn btn-success btn-sm m-1 ml-2" id="find"> Find </button>
                    <button type="reset" class="btn btn-danger btn-sm" id="clear"> Clear </button>
                  </form>
                </div>
              </div>
              <!-- Search -->

              <table class="table table-striped table-bordered table-hover" id="tSortable22">
                <thead style="font-size:15px;">
                  <tr>
                    <th>#</th>
                    <th>Name/Contact</th>
                    <th>DOJ</th>
                    <th>Fees</th>
                    <th>Balance</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <?php
            // Pagination
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
            $row_page=8;
            $no_of_page=ceil($count/$row_page);
            $start=($page-1)*$row_page;
            // Pagination
                $sql="select * from students order by id desc limit $start,$row_page";
                $result=mysqli_query($conn,$sql);
                if(mysqli_num_rows($result)>0)
                {
              ?>
                <tbody>
                  <?php
                $number=1;
                  while($row=mysqli_fetch_assoc($result))
                  {
                ?>
                  <tr style="font-size:14px;">
                    <td><?php echo  $number ?></td>
                    <td><?php echo $row['std_name']; ?><br>
                      <?php echo $row['contact']; ?></td>
                    <td><?php echo $row['doj']; ?></td>
                    <td><?php echo $row['tfees']; ?></td>
                    <td><?php echo $row['bfees']; ?></td>
                    <td scope="col">
                      <form action="php/stu_edit.php?id=<?php echo $row['id'];?>" method="post" class="d-inline">
                        <button type="submit" class="btn badge  bg-primary" value="edit" name="student_edit"><i
                            class="fa fa-user-edit"></i></button>
                      </form>
                      <form action="student.php?id=<?php echo $row['id']; ?>" method="post" class="d-inline">
                        <button type="submit" class="btn badge  bg-danger" value="delete" name="stu_delete"><i
                            class="fa fa-trash"></i></button>
                      </form>
                    </td>
                  </tr>
                  <?php
                  $number++;
                }
            ?>
                </tbody>
                <?php
                  }
                  ?>
              </table>
              <!-- // Pagination -->
              <nav aria-label="Page navigation example">
                <ul class="pagination">
                  <!-- previous List -->
                  <li <?php
          if($page==1){
            echo "class='disabled page-item'";
          }
          ?>><a class="page-link" href="student.php?page=<?php echo $page-1; ?>">Previous</a></li>
                  <!-- previous List -->
                  <?php
         for($i=1;$i<=$no_of_page;$i++)
         {
         ?>
                  <!-- Li List -->
                  <li <?php
          if($page==$i)
           echo "class='active page-item'";
           ?>><a class="page-link" href="student.php?page=<?php echo $i;?>"><?php echo $i;?></a></li>
                  <?php
         }
         ?>
                  <!-- Li List -->
                  <!-- next List -->
                  <li <?php
          if($page==$no_of_page){
            echo "class='disabled page-item'";
          }
          ?>><a class="page-link" href="student.php?page=<?php echo $page+1; ?>">Next</a></li>
                  <!-- next List -->
                </ul>
              </nav>
              <!-- // Pagination -->
          </div>
        </div>
      </div>
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
<footer class="mt-4 text-center text-white"
  style="width:100%;height:80px;background-image:linear-gradient(rgba(0,0,0,.5),rgba(0,0,0,.5));">
  School Fees Payment System | Brought To You By :
</footer>
<?php
 include "includes/footer.php";
  // Is_login 
}else{
   header("Location:../login.php");
} // Is_login
?>

<!-- student_delete php  -->
<?php
if(isset($_GET['id']))
{
  $id=$_GET['id'];
}
if(isset($_POST['stu_delete']))
{
  $sql="delete from students where id=$id";
  $result=mysqli_query($conn,$sql);
  if($result)
  {
    header("Location:student.php");
    echo '<meta http-equiv="refresh" content ="0;url=?deleted/>"';
  }else{
    header("Location:student.php");
    $_SESSION['message']="<div class='alert alert-warning text-white'>Unable To Delete Data</div>";
  
  }
}
?>