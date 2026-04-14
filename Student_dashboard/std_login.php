<?php
include "includes/dbh.php";
include "includes/header.php";
?>
<div class="container-fluid">
        <div class="row">
        <div class="col-sm-3" style="background-image:linear-gradient(rgba(0,0,0,.9),rgba(0,0,0,.9));">
      <div class="login-logo mb-1" style="">
        <a href="#">
          <img src="img/oimtlogo.png" class="mt-2 " alt="OIMT LOGO" style="width:300px;">
        </a>
      </div>
      </div>
    <div class="col-sm-9 text-center" style="background-image:linear-gradient(rgba(0,0,0,.9),rgba(0,0,0,.9));">
      <h1 class="mt-3 text-white " style="font-size:30px">WELCOME TO OMKARANANDA INSTITUTE MANAGEMENT &
        TECHNOLOGY RISHIKESH(UTTARAKHAND) </h1>
    </div>
        </div>
    </div>
    <div class="container ">
    <h2 class="text-white text-center mt-3"style="letter-spacing:1px;"> Online Fees System</h2>
    <p class="text-white text-center"style="letter-spacing:1px;"> Student Login Form</p>
        <div class="login-wrap mt-3">
            <div class="login-content shadow-lg " style="border-radius:10px; margin-top:-50px;">
                
                <div class="login-logo mb-1" style="">
                    <a href="#">
                    <i class="fas fa-user alt text-danger " style="font-size:50px; border:1px solid #555; padding:10px; border-radius:50px;"></i>
                    </a>
                </div>
                <div class="login-form">
                    <form action="std_login.php" method="post" class="mt-1 text-dark">
                        <div class="form-group">
                            <label> <i class="fas fa-envelope-square text-danger"></i> Username </label>
                            <input class="form-control" type="number" name="username" placeholder="Username" required>
                        </div>
                        <div class="form-group">
                            <label><i class="fas fa-unlock-alt text-danger"></i> Password</label>
                            <input class="form-control" type="password" id="password" name="password" placeholder="Password" required>
                        </div>
                        <!-- <button class=" show_btn btn mb-2" style="background:#ccc;" >Show Password</i></button> -->
                        <div class="login-checkbox">
                        <label>
                            <input type="checkbox" name="rememberMe">Remember Me
                        </label>
                    </div>
                        <button class="btn btn-block button bg-danger text-white m-b-20" type="submit" name="std_login" style="letter-spacing:1px;">Login</button>   
                    </form>
                    <div class="register-link">
                        <label>
                                <a href="forgot_password.php" class="text-danger"><i class="fas fa-key text-danger"></i> Forgotten Password?</a>
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
<?php
if(isset($_POST['std_login']))
{
$username=$_POST['username'];
$password=$_POST['password'];
$username=mysqli_real_escape_string($conn,$username);
$password=mysqli_real_escape_string($conn,$password);
$username=htmlentities($username);
$password=htmlentities($password);
    if($username=="" || $password=="")// Start Fields Are Required
    {
            header("Location:std_login.php");
            $_SESSION['message']="<div class='alert alert-warning'>Both Fields Are Required !</div>";
    }else
    {
        $sql="select password from students where username ='$username'";
        $res=mysqli_query($conn,$sql);                 
       if(mysqli_num_rows($res))
       {
           $row = mysqli_fetch_assoc($res);
           $dbpass = $row['password']; 
            if($dbpass == $password)
            {
                $_SESSION['std_login_id']= $username;
                header("Location:std_dashboard.php");
            }else
            {
                header("Location:std_login.php");
                $_SESSION['message']="<div class='alert alert-warning'>Sorry Credentiols do not match</div>";
            }
            
       }else
       {
           header("Location:std_login.php");
           $_SESSION['message']="<div class='alert alert-warning'>Sorry Credentiols do not match</div>";
       }
    }
    //End Fields Are Required
            
}

?>
