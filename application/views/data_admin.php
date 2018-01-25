<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Project Student</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo base_url('theme/vendor/bootstrap/css/bootstrap.min.css');?>">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?php echo base_url('theme/vendor/font-awesome/css/font-awesome.min.css');?>">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="<?php echo base_url('theme/css/fontastic.css');?>">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo base_url('theme/css/style.default.css" id="theme-stylesheet');?>">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo base_url('theme/css/custom.css');?>">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?php echo base_url('theme/img/favicon.ico');?>">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page">
      <!-- Main Navbar-->
      <header class="header">
        <nav class="navbar">
          <!-- Search Box-->
          <div class="search-box">
            <button class="dismiss"><i class="icon-close"></i></button>
            <form id="searchForm" action="#" role="search">
              <input type="search" placeholder="What are you looking for..." class="form-control">
            </form>
          </div>
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <!-- Navbar Header-->
              <div class="navbar-header">
                <!-- Navbar Brand --><a href="<?php echo site_url('');?>" class="navbar-brand">
                  <div class="brand-text brand-big"><span>BUU </span><strong> Project Student</strong></div>
                  <div class="brand-text brand-small"><strong>BUU</strong></div></a>
                <!-- Toggle Button-->
                <a id="toggle-btn" href="<?php echo site_url('');?>" class="menu-btn active"><span></span><span></span><span></span></a>

              </div>
              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <?php if($user_id) { ?>
                <li class="nav-item"><a href="<?php echo site_url('/c_login/logout');?>">Logout <i class="fa fa-sign-out"></i></a></li>
                <?php } else { ?>
                  <li class="nav-item"><a href="<?php echo site_url('/welcome/login');?>">Login <i class="fa fa-sign-out"></i></a></li>
                
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <div class="page-content d-flex align-items-stretch"> 
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
 <!--   ส่วนแสดงรูปและชื่อคนที่ login      <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="http://reg.buu.ac.th/registrar/getstudentimage.asp?id=57660136" alt="..." class="img-fluid rounded-circle"></div>
                <div class="title" style="margin: 0 auto;">
                    <h1 class="h5"> นาย สวิตต์ สวัสดี</h1>
                        <p> 57660136 </p>
                </div>
         </div> -->
          <!-- Sidebar Navidation Menus-->
          <ul class="list-unstyled">
                  <!--  <li><a href="<?php echo site_url('/welcome/activity');?>"><i class="fa fa-calendar-check-o"></i> ข้อมูลส่วนตัว </a></li> -->
                    <li class="active"><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> 
	                    <i class="icon-interface-windows"></i> ข้อมูลเจ้าหน้าที่ </a>
		                    <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                                <li class="active"><a href="data_admin"> ข้อมูลส่วนตัว </a></li>
                                <li><a href="edit_admin"> แก้ไขข้อมูล </a></li>
		                    </ul>
                    </li>
                    <li><a href="<?php echo site_url('/');?>"><i class="fa fa-bar-chart"></i> ข้อมูลกิจกรรม </a></li>
                    <li><a href="<?php echo site_url('/');?>"><i class="fa fa-id-card"></i> ข้อมูลสหกิจ </a></li>
                    <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> 
	                    <i class="icon-interface-windows"></i> ข้อมูลสถิติ </a>
		                    <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                                <li><a href="#"> สถิติจำนวนนิสิต </a></li>
                                <li><a href="#"> รายชื่อรอพินิจ </a></li>
                                <li><a href="#"> ผู้สำเร็จการศึกษา </a></li>
		                    </ul>
                    </li>
                    <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> 
	                    <i class="icon-interface-windows"></i> ข้อมูลนิสิต </a>
		                    <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                                <li><a href="#"> ข้อมูลส่วนตัวนิสิต </a></li>
                                <li><a href="#"> รางวัลการแข่งขัน </a></li>
		                    </ul>
                    </li>
          </ul>
        </nav>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h1 class="no-margin-bottom"><center>Burapha University</center></h1>
            </div>
          </header>
          <br>
          <header class="page-header">
            <div class="container-fluid">
              <h1 class="no-margin-bottom"><center>ข้อมูลส่วนตัว</center></h1>
            </div>
          </header>
          

    <!-- Javascript files-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url('theme/vendor/popper.js/umd/popper.min.js');?>"> </script>
    <script src="<?php echo base_url('theme/vendor/popper.js/umd/popper.min.js');?>"></script>
    <script src="<?php echo base_url('theme/vendor/bootstrap/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('theme/vendor/jquery.cookie/jquery.cookie.js');?>"> </script>
    <script src="<?php echo base_url('theme/vendor/chart.js/Chart.min.js');?>"></script>
    <script src="<?php echo base_url('theme/vendor/jquery-validation/jquery.validate.min.js');?>"></script>
    <script src="<?php echo base_url('theme/js/charts-home.js');?>"></script>
    <!-- Main File-->
    <script src="<?php echo base_url('theme/js/front.js');?>"></script>
  </body>
</html>
