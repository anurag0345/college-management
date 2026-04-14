<?php
include "includes/dbh.php";
include "includes/header.php";
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3" style="height:80px;background-image:linear-gradient(rgba(0,0,0,.1),rgba(0,0,0,.1));">
            <div class="login-logo mb-1" style="">
                <a href="#">
                    <img src="img/oimtlogo.png" class="mt-2 " alt="OIMT LOGO" style="width:300px;">
                </a>
            </div>
        </div>
        <div class="col-sm-9" style="height:80px;background-image:linear-gradient(rgba(0,0,0,.1),rgba(0,0,0,.1));">
            <marquee class="mt-3 text-warning " style="font-size:30px">WELCOME TO OMKARANANDA INSTITUTE MANAGEMENT &
                TECHNOLOGY </marquee>
        </div>
    </div>
</div>
<div class="container ">
    <h2 class="text-white text-center mt-3" style="letter-spacing:1px;"> Online Fees System</h2>
    <p class="text-white text-center" style="letter-spacing:1px;"> Admin Login Form</p>
    <div class="login-wrap mt-3">
        <div class="login-content shadow-lg " style="border-radius:10px; margin-top:-50px;">

            <div class="login-logo mb-1" style="">
                <a href="#">
                    <i class="fa fa-user text-success "
                        style="font-size:50px; border:1px solid #555; padding:10px; border-radius:30px;"></i>
                </a>
            </div>
            <div class="login-form">
                <form action="login_check.php" method="post" class="mt-1 text-dark">
                    <div class="form-group">
                        <label> <i class="fa fa-envelope-square text-warning"></i> Email Address</label>
                        <input class="form-control" type="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                                <label> <i class="fa fa-unlock-alt text-warning"></i> Password</label>
                                <input class="form-control" id="password" type="password" name="password" placeholder="Password">   
                    </div>
                    <!-- <button class=" show_btn btn mb-1" style="background:#ccc;" >Show Password</i></button> -->
                    <div class="login-checkbox">
                        <label>
                            <input type="checkbox" name="remember">Remember Me
                        </label>
                    </div>
                    <button class="btn btn-block button bg-success text-white m-b-20" type="submit" name="login">Log
                        in</button>

                </form>
                <div class="register-link">
                    <p>
                        Don't you have account?
                        <a href="registration.php" class="text-danger">Register Here</a>
                    </p>
                    <label>
                        <a href="forgot_password.php"><i class="fas fa-key text-warning"></i> Forgotten Password?</a>
                    </label>
                </div>
                <?php
                    if(isset($_SESSION['message']))
                    {
                        echo $_SESSION['message'];
                        unset($_SESSION['message']);
                    }
                    ?>
            </div>
        </div>
    </div>
</div>
<?php
include "includes/footer.php";
?>