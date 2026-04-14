<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo TITLE; ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- jquery-ui.min -->
  <link rel="stylesheet" href="plugins/jquery-ui/jquery-ui.min.css">
  <!-- jquery-ui.min -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  
  <style>
body{
    height:100vh;
    background:green;
    background-size:cover;
    background-repeat:no-repeat;
    background-attachment:fixed;
    transition: all;
}
.hover:hover{
  background: rgb(201, 79, 201);
  transition:.4s;
}
.main{
padding-left:260px;
}
@media(max-width:992px)
{
.main{
padding-left:0px;
}
}
.toggle-button{
  display:none;
}
@media(max-width:992px)
{
  .toggle-button{
display:block;
}
}

.side_nav:hover{
  background:red;
}
</style>
</head>
<body class="hold-transition sidebar-mini ">
 