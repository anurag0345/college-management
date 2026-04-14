<?php
include "includes/dbh.php";
// <!-- username available or not check -->
 $username = $_POST['username'];
 $sql_usercheck = "select * from admin_registration where username = '$username'";
 $query_usercheck = mysqli_query($conn,$sql_usercheck);
 echo mysqli_num_rows($query_usercheck);

// <!-- username available or not check -->

?>