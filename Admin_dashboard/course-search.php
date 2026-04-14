<?php
include "includes/dbh.php";
?>
<!-- //////////////////////////////////////// Display Course Table data/ ////////////////////////////////////////////////////////// -->
 <?php
 $inputSearch = $_POST['input_search'];
//  echo  $_POST['input_search'];
$sql = "select * from branch where branch like '%{$inputSearch}%' or address like '%{$inputSearch}%'";
$query = mysqli_query($conn,$sql);
if(mysqli_num_rows($query)>0)
{
  ?>
  <table class="table table-striped table-bordered table-hover">
              <thead>

                <tr style="font-size:16px;">
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
            <nav aria-label="Page navigation example" id="nav">
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
            </nav>
            <!-- // Pagination -->
  <?php
}
?>
<!-- //////////////////////////////////////// Display Course Table data/ ////////////////////////////////////////////////////////// -->

 