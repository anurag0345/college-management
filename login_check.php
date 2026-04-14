<?php
include "includes/dbh.php";
?>
<?php
if(!isset($_SESSION['admin_lohin']))
{
        if(isset($_POST['login']))
        {
            $email=$_POST['email'];
            $password=$_POST['password'];
            $email=mysqli_real_escape_string($conn,$email);
            $password=mysqli_real_escape_string($conn,$password);
            $email=htmlentities($email);
            $password=htmlentities($password);
            {
                if($email=="" || $password=="")// Start Fields Are Required
                {
                        header("Location:login.php");
                        $_SESSION['message']="<div class='alert alert-warning'>Fields Are Required</div>";
                }else{
                    $sql="select password from admin_registration where email ='$email'";
                    $res=mysqli_query($conn,$sql);
                    $row=mysqli_fetch_assoc($res);
                    $pass=$row['password'];
                    if(password_verify($password,$pass))
                    {
                        $_SESSION['admin_login']= $email;
                        header("Location:admin_dashboard/dashboard.php");
                    }
                    else{
                        header("Location:login.php");
                        $_SESSION['message']="<div class='alert alert-warning'>Sorry Credentiols don't Match</div>";
                    }
                }// End Fields Are Required
            }
        }
    // Is_login 
}else{
    header("Location:admin_dashboard/dashboard.php");
} // Is_login 
?>

