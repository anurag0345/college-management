<?php
include "includes/dbh.php";
include "includes/header.php";
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3" style="background-image:linear-gradient(rgba(0,0,0,.9),rgba(0,0,0,.9));">
            <div class="login-logo mb-1" style="">
                <a href="#">
                    <img src="img/oimtlogo.png" class="mt-3 " alt="OIMT LOGO" style="width:300px;">
                </a>
            </div>
        </div>
        <div class="col-sm-9" style="background-image:linear-gradient(rgba(0,0,0,.9),rgba(0,0,0,.9));">
            <h1 class="mt-3 text-white text-center " style="font-size:30px">WELCOME TO OMKARANANDA INSTITUTE MANAGEMENT
                &
                TECHNOLOGY RISHIKESH (UTTARAKHAND)</h1>
        </div>
    </div>
    <p class="text-white text-center font-weight-bold " style="font-size:30px">Student Online Fee Submit (2020-2021)
    </p>
    <div class="bg-light ">
        <a href="std_dashboard.php" class="btn btn-dark m-1 btn-small active">Student Profile</a>
        <a href="fee_submit.php" class="btn btn-dark m-1 btn-small">Fees Information</a>
        <a href="std_logout.php" class="btn btn-dark m-1 btn-small">Logout</a></div>
        </div>
    <div class="container-fluid bg-light mb-2 mt-3 p-4" style=""> <!--container -->
        <div class="col col-lg-8 bg-light mx-auto" style=""> <!--col-lg-8 -->
        <h2 class="mt-1 text-center mb-3">Payment your fee</h2>
           <div class="row"><!--Row -->
           <div class="col col-md-6 text-center" style="border:2px solid black;"><!--col-lg-6 First column-->
           <h4 class="mt-1">Student Name</h4>
           <hr class="bg-dark" style="height:2px;">

           <h4 class="mt-1">Father Name</h4>
           <hr class="bg-dark" style="height:2px;">

           <h4 class="mt-1">Class</h4>
           <hr class="bg-dark" style="height:2px;">

           <h4 class="mt-1">Course Code</h4>
           <hr class="bg-dark" style="height:2px;">

           <h4 class="mt-1">Amount</h4>
           <hr class="bg-dark" style="height:2px;">

           </div><!--col-lg-6 First column-->
           <?php
            if(isset($_SESSION['std_login_id'])){
                $username = $_SESSION['std_login_id'];
                // echo $username;
                $sql = "select * from students where username='$username'";
                $query = mysqli_query($conn,$sql) or die("Query Field");
                if(mysqli_num_rows($query)>0)
                {
                    $row = mysqli_fetch_assoc($query);
        
           ?>
           <div class="col col-md-6 text-center"style="border:2px solid black;"><!--col-lg-6 Second column-->
           <h4 class="mt-1"><?php echo $row['std_name']; ?></h4>
           <hr class="bg-dark" style="height:2px;">

           <h4 class="mt-1"><?php echo $row['father_name']; ?></h4>
           <hr class="bg-dark" style="height:2px;">
           
           <h4 class="mt-1"><?php echo $row['branch']; ?> (<?php echo $row['std_year']; ?> <?php echo $row['std_batch']; ?>)</h4>
           <hr class="bg-dark" style="height:2px;">

            <h4 class="mt-1">214</h4>
           <hr class="bg-dark" style="height:2px;">

            <h4 class="mt-1"><i class="fas fa-rupee-sign"></i><?php echo $row['std_total'];?>:00</h4>
           <hr class="bg-dark" style="height:2px;">
         </div>
           </div><!--col-lg-6 Second column-->
               <div class="text-center mt-3"><a href="confirm_payment.php?>" class="btn btn-success mx-auto">Confirm your payment</a></div>
           </div><!--Row -->
        </div>
        <!--col-lg-8 -->
    </div>
    <?php 
                }
            }
        ?>
    <!--container -->
</div>
<?php
include "includes/footer.php";
?>