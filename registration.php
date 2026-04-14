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
  <div class="container ">
  <h2 class="text-white text-center mt-2" style="letter-spacing:1px;"> Online Fees System</h2>
    <p class="text-white text-center" style="letter-spacing:1px;"> Admin Registration Form</p>
    <div class="login-wrap pt-3">
      <div class="login-content shadow-lg" style="border-radius:10px;">
        <div class="login-logo mb-2" style="">
          <a href="#">
            <i class="fas fa-user-plus text-primary"
              style="font-size:50px; border:1px solid #555; padding:15px; border-radius:50px;"></i>
          </a>
        </div>
        <div class="login-form">
          <form action="registration_check.php" method="post">
            <div class="form-group ">
              <label for="username" id="username_lable"><i class="fas fa-users text-warning"></i> User Name <i
                  class="fas fa-check text-success" id="check"></i><i class="fas fa-times text-danger"
                  id="error_check"></i></label>
              <input type="text" class="form-control" name="user_name" id="user_name" placeholder="User Name"
                autocomplete="off">
              <span id='valiadte_error1'></span>
            </div>
            <div class="form-group ">
              <label for="name" id="email_lable"><i class="fas fa-envelope-square text-warning"></i> E-mail <i
                  class="fas fa-check text-success" id="check_email"></i><i class="fas fa-times text-danger"
                  id="error_check_email"></i></label>
              <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" required
                autocomplete="off">
              <span id='valiadte_error2'></span>
            </div>
            <div class="form-group">
              <label for="inputPassword4"><i class="fas fa-unlock-alt text-warning" id="password_lable"></i> Password <i
                  class="fas fa-check text-success" id="check_password"></i><i class="fas fa-times text-danger"
                  id="error_check_password"></i></label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Password"
                autocomplete="off">
              <span id='valiadte_error3'></span>
            </div>
            <div class="form-group">
              <label for="inputPassword4"><i class="fas fa-unlock-alt text-warning"></i> Confirm Password <i
                  class="fas fa-check text-success" id="check_con_password"></i><i class="fas fa-times text-danger"
                  id="error_check_con_password"></i></label>
              <input type="password" class="form-control" name="retype_password" id="con_password"
                placeholder="Confirm Password" autocomplete="off">
              <span id='valiadte_error4'></span>
            </div>
            <!-- <button class=" show_btn btn mb-1" style="background:#ccc;" >Show Password</i></button> -->
                   
        </div>
        <button type="submit" name="register" id="register" class="btn btn-block btn-primary m-b-20">Register</button>
        </form>
        <?php
      if(isset($_SESSION['message']))
      {
      echo $_SESSION['message'];
      unset($_SESSION['message']);
      }
      ?>
        <div class="register-link">
          <p>
            Already Have Account?
            <a href="login.php">LogIn</a>
          </p>

        </div>
      </div>
    </div>
  </div>
</div>
<?php
      include "includes/footer.php";
?>