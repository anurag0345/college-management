<?php
define('TITLE',' College Fee Payment Course');
define('PAGE','course');
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
    <div class="bg-light mx-auto" style="width:90%;height:130vh;">
      <!-- Main Div -->
      <div class="card-header text-dark mt-2">
        <h1 class="mt-2 font-weight-bold">COURSE</h1>
        <hr class="bg-info" style="height:2px;">
      </div>
      <div class="panel panel-default">
        <div class="table-sorting table-responsive">
          <nav class="navbar navbar-light bg-light">
            <form action="" class="form-inline">
              <div class="panel-heading">
                <h6 class="scheduler-border ml-2 font-weight-bold">Manage Student </h6>
              </div>
            </form>
            <form class="form-inline float-right">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" id='search-course'>
              <button class="btn btn-outline-danger mx-2" type="submit">Search</button>
            </form>
            <?php
                        if(isset($_SESSION['message']))
                        {
                          echo $_SESSION['message'];
                          unset($_SESSION['message']);
                        }
                        ?>
            <td id="course-table">
              <table class="table table-striped table-bordered table-hover">
                <thead>
                  <tr style="font-size:15px;">
                    <th>#</th>
                    <th>Branch</th>
                    <th>Address</th>
                    <th>Details</th>
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
                      }else{
                        $page=1;
                      } // Pagination
                        $sql="select * from branch";
                        $res=mysqli_query($conn,$sql);
                        $count=mysqli_num_rows($res);
                        $row_page=9;
                        $no_of_page=ceil($count/$row_page);
                        $start=($page-1)*$row_page;
                        $sql="select * from branch order by id desc limit $start,$row_page";
                        $result=mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result)>0)
                        {
                  ?>
                <tbody id="course-table">
                            <?php
                    $number=1;
                    while($row=mysqli_fetch_assoc($result))
                    {
                    ?>
                  <tr style="font-size:14px;">
                    <td><?php echo $number; ?></td>
                    <td><?php echo $row['branch']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><?php echo $row['detail']; ?></td>
                    <td scope="col">
                      <form action="php/branch_edit.php?id=<?php echo $row['id'];?>" method="post" class="d-inline">
                        <button type="submit" class="btn badge  bg-primary" value="edit" name="branch_edit"><i
                            class="fa fa-user-edit"></i></button>
                      </form>
                      <form action="course.php?id=<?php echo $row['id']; ?>" method="post" class="d-inline">
                        <button type="submit" class="btn badge  bg-danger" value="delete" name="branch_delete"><i
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
            
                <ul class="pagination">
                  <!-- previous List -->
                  <li <?php
          if($page==1){
            echo "class='disabled page-item'";
          }
          ?>><a class="page-link" href="course.php?page=<?php echo $page-1; ?>">Previous</a></li>
                  <!-- previous List -->
                  <?php
         for($i=1;$i<=$no_of_page;$i++)
         {
         ?>
                  <!-- Li List -->
                  <li <?php
          if($page==$i)
           echo "class='active page-item'";
           ?>><a class="page-link" href="course.php?page=<?php echo $i;?>"><?php echo $i;?></a></li>
                  <?php
         }
         ?>
                  <!-- Li List -->
                  <!-- next List -->
                  <li <?php
          if($page==$no_of_page){
            echo "class='disabled page-item'";
          }
          ?>><a class="page-link" href="course.php?page=<?php echo $page+1; ?>">Next</a></li>
                  <!-- next List -->
                </ul>
            
              <!-- // Pagination -->
            </td>
        </div>
      </div>
    </div>

    <!-- row -->
  </div>
  <!-- Row -->
  <!-- Main Div -->
</div>
<!-- Main Div -->
<footer class="mt-4 text-center text-white"
  style="width:100%;height:80px;background-image:linear-gradient(rgba(0,0,0,.5),rgba(0,0,0,.5));">
  School Fees Payment System | Brought To You By :
</footer>

<!-- ./wrapper -->
<!-- *Row  -->
<?php
 include "includes/footer.php";
// Is_login 
}else{
 header("Location:../login.php");
} // Is_login
?>

<!-- branch_delete php  -->
<?php
if(isset($_GET['id']))
{
  $id=$_GET['id'];
}
if(isset($_POST['branch_delete']))
{
  $sql="delete from branch where id=$id";
  $result=mysqli_query($conn,$sql);
  if($result)
  {
    header("Location:course.php");
    echo '<meta http-equiv="refresh" content ="0;url=?deleted/>"';
  }else{
    header("Location:course.php");
    $_SESSION['message']="<div class='alert alert-warning text-white'>Unable To Delete Data</div>";
  
  }
}
?>