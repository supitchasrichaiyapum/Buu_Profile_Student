<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Project_Student</title>
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
                <!-- Navbar Brand --><a href="<?php echo site_url('/welcome');?>" class="navbar-brand">
                  <div class="brand-text brand-big"><span>BUU</span><strong>Project Student</strong></div>
                  <div class="brand-text brand-small"><strong>BUU</strong></div></a>
                <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
              </div>
              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Search-->
                <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="icon-search"></i></a></li>
                <!-- Logout    -->
                <li class="nav-item"><a href="<?php echo site_url('/welcome/login');?>"> Login <i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <div class="page-content d-flex align-items-stretch"> 
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <div class="title"style="margin: 0 auto;">
              <h1 class="h4"></h1>
            </div>
          </div>
          <!-- Sidebar Navidation Menus-->
          <ul class="list-unstyled">
            <li><a href="<?php echo site_url('/welcome/activity');?>"><i class="fa fa-calendar-check-o"></i> ข้อมูลกิจกรรม </a></li>
            <li><a href="<?php echo site_url('/welcome/statistics');?>"><i class="fa fa-bar-chart"></i> สถิติจำนวนนิสิต </a></li>
            <li><a href="<?php echo site_url('/welcome/coop');?>"><i class="fa fa-id-card"></i> ข้อมูลสหกิจ </a></li>
            <li><a href="<?php echo site_url('/welcome/award');?>"><i class="fa fa-trophy"></i> รางวัลการแข่งขัน </a></li>
            <li class="active"><a href="<?php echo site_url('/welcome/graduate');?>"><i class="fa fa-graduation-cap"></i> ผู้สำเร็จการศึกษา </a></li>
        </nav>
        <Body>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h1 class="no-margin-bottom"><center>ผู้สำเร็จการศึกษา</center></h1>
            </div>
          </header>
          <br>

          <div class="container-fluid">
              <h2 class="no-margin-bottom">คณะวิทยาการสารสนเทศ</h2>
          </div> <br><br>
          <div class="container-fluid">
            <form class="form-horizontal">
              <fieldset>
              <!-- Select Basic -->
              <div class="row">
                <div class="form-group">
                   <label class="col-md-12 control-label" for="selectbasic">ปีการศึกษา</label> 
                </div>
             
                <!-- select -->
                <div class="form-group">
                <form id='statistics' method='post'>
                    <div class="col-md-12">
                    <select id="selectbasic" name="selectbasic" class="form-control" placeholder="ปีการศึกษา"> 
                      <option value="1">2557</option>
                      <option value="2">2558</option>
                      <option value="3">2559</option>
                    </select>
                    </div>
                  </div>
                <!-- Button -->
                <div class="form-group">
                    <div class="col-md-4">
                      <button id="Yes" name="Yes" class="btn btn-default"><a href="<?php echo site_url('/welcome/graduate_check');?>">ตกลง</a></li></button> 
                    </div>   
                </div>   
                </form>     
                </div>
                <section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">
              <div class="row bg-white has-shadow">
              <div class="col-md-6">
                 <p> ระดับการศึกษา : ปริญญาตรี พิเศษ </p>
                 <p> คณะ : วิทยาการสารสนเทศ </p>
                 <p> หลักสูตร : 2515013 เทคโนโลยีสารสนเทศ - ป.ตรี 4 ปี (54) </p>
                 <p> ปีการศึกษา : 2560 </p>
                 <p> ภาคการศึกษาที่ 1 </p> <BR>
              </div>
                <!-- Item -->
                <div class="container">
                  <div class="container">
                  <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>เลขที่</th>
                      <th>รหัสประจำตัว</th>
                      <th>ชื่อ</th>
                      <th>เกียรตินิยม</th>
                      <th>วันจบการศึกษา</th>
                      <th>สถานะ</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>57660136</td>
                      <td>นายสวิตต์ สวัสดี</td>
                      <td>-</td>
                      <td>-</td>
                      <td>รออนุมัติ</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>57660137</td>
                      <td>นางสาวสุพิชชา ศรีชัยภูมิ</td>
                      <td>-</td>
                      <td>-</td>
                      <td>รออนุมัติ</td>
                    </tr>
                  </tbody>
                </table>
                  </div>
                </div>
              </div>
            </div>
          </section>
</Body>

          <!-- Javascript files-->
          <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
          <script src="<?php echo base_url('theme/vendor/popper.js/umd/popper.min.js');?>"> </script>
          <script src="<?php echo base_url('theme/vendor/bootstrap/js/bootstrap.min.js');?>"></script>
          <script src="<?php echo base_url('theme/vendor/jquery.cookie/jquery.cookie.js');?>"> </script>
          <script src="<?php echo base_url('theme/vendor/chart.js/Chart.min.js');?>"></script>
          <script src="<?php echo base_url('theme/vendor/jquery-validation/jquery.validate.min.js');?>"></script>
          <script src="<?php echo base_url('theme/js/charts-home.js');?>"></script>
          <!-- Main File-->
          <script src="<?php echo base_url('theme/js/front.js');?>"></script>
  </body>
</html>