 <!-- Main Sidebar Container -->
 <aside class="main-sidebar" style="">
    <!-- Brand Logo -->
    <a href="dashboard.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">OIMT ADMIN PANEL </span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../student_dashboard/img/oimtlogo.png" class="elevation-2" alt="User Image" style="width:160px;">
         
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2 ">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="dashboard.php" class="nav-link side_nav text-white <?php if( PAGE =='dashboard')echo 'active'?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
            <hr class="bg-light" style="height:1px;">
          </li>
          <li class="nav-item has-treeview">
            <a href="course.php" class="nav-link side_nav text-white <?php if( PAGE =='course')echo 'active'?>">
           &nbsp;<i class="fa fa-university "></i>
              <p>
                Course
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="course.php" class="nav-link side_nav <?php if( PAGE =='course')echo 'active'?>">
               <i class="fa fa-university text-white"></i>
                  <p class="text-white"> Course</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="add_branch.php" class="nav-link side_nav <?php if( PAGE =='add_branch')echo 'active'?>">
                <i class="fa fa-plus text-white"></i>
                  <p class="text-white"> Add Course</p>
                </a>
              </li>             
            </ul>
            <hr class="bg-light" style="height:1px;">
          </li>
          <li class="nav-item has-treeview">
          <a href="student.php" class="nav-link side_nav text-white <?php if( PAGE =='student')echo 'active'?>">
           &nbsp;<i class="fa fa-users "></i>
              <p>
                Student
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="student.php" class="nav-link side_nav <?php if( PAGE =='student')echo 'active'?>">
                <i class="fa fa-users text-white"></i>
                  <p class="text-white">Student</p>
                </a>
              </li> 
              <li class="nav-item">
                <a href="add_student.php" class="nav-link side_nav <?php if( PAGE =='add')echo 'active'?>">
                <i class="fa fa-plus text-white"></i>
                  <p class="text-white"> Add Student</p>
                </a>
              </li>             
            </ul>
            <hr class="bg-light" style="height:1px;">
          </li>
          <!-- <li class="nav-item">
          <a href="fee.php" class="nav-link side_nav text-white <?php if( PAGE =='fee_submit')echo 'active'?>">
           &nbsp; <i class="fas fa-dollar-sign"></i>
              <p>
                Fees
              </p>
            </a>
            <hr class="bg-light" style="height:1px;">
          </li> -->
          <li>
          <a href="report.php" class="nav-link side_nav text-white <?php if( PAGE =='report')echo 'active'?>">
           &nbsp;<i class="far fa-copy "></i>
              <p>
                Report
              </p>
            </a>
            <hr class="bg-light" style="height:1px;">
          </li>
          <li>
          <a href="setting.php" class="nav-link side_nav text-white <?php if( PAGE =='setting')echo 'active'?>">
           &nbsp;<i class="fa fa-cogs "></i>
              <p>
                Setting
              </p>
            </a>
            <hr class="bg-light" style="height:1px;">
          </li>
          <li>
          <a href="logout.php" class="nav-link side_nav text-white">
           &nbsp;<i class="fa fa-power-off "></i>
              <p>
               Logout
              </p>
            </a>
            <hr class="bg-light" style="height:1px;">
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>



