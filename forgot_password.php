<?php
define('TITLE',' College Fee Payment Forgot Pass');
include "includes/header.php";
include "includes/dbh.php";
?> 
<div class="container-fluid">
        <div class="row">
         <div class="col-sm-3"  style="height:80px;background-image:linear-gradient(rgba(0,0,0,.1),rgba(0,0,0,.1));" >
         <div class="login-logo mb-1" style="">
                    <a href="#">
                   <img src="img/oimtlogo.png" class="mt-2 " alt="OIMT LOGO" style="width:300px;">
                    </a>
        </div>
         </div>
         <div class="col-sm-9"  style="height:80px;background-image:linear-gradient(rgba(0,0,0,.1),rgba(0,0,0,.1));">
         <marquee class="mt-3 text-warning " style="font-size:30px">WELCOME TO OMKARANANDA INSTITUTE MANAGEMENT & TECHNOLOGY </marquee>
         </div>
        </div>
<div class="container  ">

    <div class="login-wrap pt-5 "> 
        <div class="login-content shadow-lg" style="border-radius:10px;">
       
            <div class="login-logo mb-2" style="">
                <a href="#">
                <i class="fas fa-key text-danger"style="font-size:50px; border:1px solid #555; padding:10px; border-radius:50px; color:#555;"></i>
                </a>
            </div>
            <div class="login-form">
                <form action="login_check.php" method="post">
                    <div class="form-group">
                        <label> <i class="fas fa-envelope-square text-danger"></i> Email Address</label>
                        <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                    </div>
                    <div class="login-checkbox">
                    
                    </div>
                    <button class="btn btn-block button bg-danger text-white m-b-20" type="submit">Submit</button>
                    
                </form>
                <div class="register-link">
                    <p>
                        Back To Login
                        <a href="login.php" class="text-danger">Click Here</a>
                    </p>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include "includes/footer.php";
?>
