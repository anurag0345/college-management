<?php
include "includes/dbh.php";
?>
<!--  Start Student Registeration PHP Coding -->
<?php
if(isset($_POST['register']))
{
    $username=$_POST['user_name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $retype_password=$_POST['retype_password'];
    if(filter_var($email , FILTER_VALIDATE_EMAIL)){
      header("Location: registration.php");
      $_SESSION['message']="<div class='alert alert-warning mt-2'>good</div>";
    //Check Email or username Already Registred
    $sql1="select * from admin_registration where username='$username' or email='$email' ";
    $result=mysqli_query($conn,$sql1);
    if(mysqli_num_rows($result)>0)//Check Email Already Registred
    {
      header("Location: registration.php");
      $_SESSION['message']="<div class='alert alert-danger mt-2'>Account Already Ragistered</div>";
    }else{//End Email Already Registred

      if($password == $retype_password)//check Password match
      {
        $username= mysqli_real_escape_string($conn,$username);
        $email=mysqli_real_escape_string($conn,$email);
        $password=mysqli_real_escape_string($conn,$password);
        $username = htmlentities($username);
        $email =htmlentities($email);
        $password = htmlentities($password);
        $password = password_hash($password,PASSWORD_BCRYPT);
        $sql= "insert into admin_registration (username,email,password) values ('$username','$email','$password')";
        $res=mysqli_query($conn,$sql);
        if($res){// Start Store data in Database
          header("Location:registration.php");
        $_SESSION['message']="<div class='alert alert-success mt-2'>You Have Been Successfully Registred</div>";
        }else{// End Store data in Database
          header("Location:registration.php");
        $_SESSION['message']="<div class='alert alert-danger mt-2'>Something Went Wrong</div>";
        }
      }else{//End Password match
        header("Location:registration.php");
        $_SESSION['message']="<div class='alert alert-danger mt-2'>Password Don't Match</div>";
      }
    }//End Email Already Registred
  }else{
    header("Location: registration.php");
    $_SESSION['message']="<div class='alert alert-warning mt-2'>Email Address Not Valid</div>";
  }
    
}
// <!--  End Student Registeration PHP Coding -->
?>


