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
                <!-- Navbar Brand --><a href="index.html" class="navbar-brand">
                  <div class="brand-text brand-big"><span>BUU</span><strong>Project Student</strong></div>
                  <div class="brand-text brand-small"><strong>BD</strong></div></a>
                <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
              </div>
              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Search-->
                <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="icon-search"></i></a></li>
                <!-- Logout    -->
                <li class="nav-item"><a href="login.html" class="nav-link logout">Login<i class="fa fa-sign-out"></i></a></li>
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
            <div class="title" style="margin: 0 auto;">
              <h1 class="h4">HOME</h1>
            </div>
          </div>
          <!-- Sidebar Navidation Menus-->
          <ul class="list-unstyled">
                    <li><a href="index.html"> <i class="icon-home"></i>ข้อมูลกิจกรรม </a></li>
                    <li><a href="<?php echo site_url('/welcome/statistics');?>"> <i class="icon-padnote"></i>สถิติจำนวนนิสิต </a></li>
                    <li><a href="charts.html"> <i class="icon-padnote"></i>ข้อมูลสหกิจ </a></li>
                    <li><a href="forms.html"> <i class="icon-padnote"></i>รางวัลการแข่งขัน </a></li>
                    <li class="active"><a href="<?php echo site_url('/welcome/graduate');?>"> <i class="icon-padnote"></i>ผู้สำเร็จการศึกษา </a></li>
        </nav>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h1 class="no-margin-bottom"><center>ผู้สำเร็จการศึกษา</center></h1>
            </div>
          </header>
          <br>
          <div class="container-fluid">
              <h5 class="no-margin-bottom">ระดับการศึกษา : ปริญญาตรี พิเศษ</h5>
              <br>
              <h5 class="no-margin-bottom">คณะ : วิทยาการสารสนเทศ</h5>
              <br>
              <h5 class="no-margin-bottom">หลักสูตร : 2515013 เทคโนโลยีสารสนเทศ - ป.ตรี 4 ปี (54)</h5>
              <br>
              <h5 class="no-margin-bottom">ปีการศึกษา : 2560</h5>
              <br>
              <h5 class="no-margin-bottom">ภาคการศึกษาที่ 1</h5>
          </div>
          <br>
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
          <script>
            var myIndex = 0;
            carousel();

            function carousel() {
              var i;
              var x = document.getElementsByClassName("mySlides");
              for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";  
              }
              myIndex++;
              if (myIndex > x.length) {myIndex = 1}    
              x[myIndex-1].style.display = "block";  
              setTimeout(carousel, 2000); // Change image every 2 seconds
              }
</script>
  </body>
</html>