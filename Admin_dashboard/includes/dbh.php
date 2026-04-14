<?php
ob_start();
session_start();
$servername="localhost";
$username="root";
$password="";
$dbhname="oimt_fees_system";
$conn=mysqli_connect($servername,$username,$password,$dbhname);
// if($conn){
//     echo "yes";
// }
// else{
//     echo "no";
// }
?>