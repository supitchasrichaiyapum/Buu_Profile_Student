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
    <style>
table {
    width:100%;
}
th, td {
    padding: 5px;
    text-align: left;
}
      </style>
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
                <!-- Navbar Brand --><a href="<?php echo site_url('/welcome/menu_student');?>" class="navbar-brand">
                  <div class="brand-text brand-big"><span>BUU </span><strong> Project Student</strong></div>
                  <div class="brand-text brand-small"><strong>BUU</strong></div></a>
                <!-- Toggle Button-->
                <a id="toggle-btn" href="<?php echo site_url('/');?>" class="menu-btn active"><span></span><span></span><span></span></a>

              </div>
              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <?php if($user_id) { ?>
                <li class="nav-item"><a href="<?php echo site_url('/c_login/logout');?>">Logout <i class="fa fa-sign-out"></i></a></li>
                <?php } else { ?>
                  <li class="nav-item"><a href="<?php echo site_url('/welcome/login');?>">Login <i class="fa fa-sign-out"></i></a></li>
                  <?php } ?>
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
            <div class="avatar"><img src="http://reg.buu.ac.th/registrar/getstudentimage.asp?id=<?php echo $this->session->userdata('user_id');?>" alt="..." class="img-fluid rounded-circle"></div>
                <div class="title" style="margin: 0 auto;">
                    <h1 class="h5"> <?php echo $student['Student_NameTH'] ?> <?php echo $student['Student_LNameTH'] ?></h1>
                        <p> <?php echo $student['Student_ID'] ?> </p>
                </div>
         </div>
          <!-- Sidebar Navidation Menus-->
          <ul class="list-unstyled">
                  <!--  <li><a href="<?php echo site_url('/welcome/activity');?>"><i class="fa fa-calendar-check-o"></i> ข้อมูลส่วนตัว </a></li> -->
                    <li class="active"><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> 
	                    <i class="icon-interface-windows"></i> ข้อมูลนิสิต </a>
		                    <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                                <li class="active"><a href="data_student"> ข้อมูลส่วนตัว </a></li>
                                <li><a href="edit_student"> แก้ไขข้อมูลส่วนตัว </a></li>
                                <li><a href="transcript"> ผลการศึกษา </a></li>
		                    </ul>
                    </li>
                    <li><a href="<?php echo site_url('');?>"><i class="fa fa-bar-chart"></i> ข้อมูลกิจกรรม </a></li>
                    <li><a href="<?php echo site_url('');?>"><i class="fa fa-id-card"></i> ข้อมูลสหกิจ </a></li>
                    <li><a href="<?php echo site_url('');?>"><i class="fa fa-trophy"></i> ข้อมูลสถิติ </a></li>
          </ul>
        </nav>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h1 class="no-margin-bottom"><center>ข้อมูลส่วนตัว</center></h1>
            </div>
          </header>
          <br>
        <Body>
          <section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">
              <div class="row bg-white has-shadow">
                <div class="container">
                  <div class="container">

          <table style="width:100%">
            <tr>
              <TH>1. ข้อมูลทั่วไป</TH>
            </tr>
            <tr>
              <td>ชื่อ - นานสกุล(ภาษาไทย)</td>
              <td>ชื่อเล่น</td>
            </tr>
            <tr>
              <td>ชื่อ - นานสกุล(ภาษาอังกฤษ)</td>
              <td>เบอร์โทร</td>
            </tr>
              <tr>
              <td>รหัสนิสิต</td>
              <td>เลขบัตรประชาชน</td>
            </tr>
            <tr>
              <td>ชั้นปี</td>
              <td>หลักสูตร</td>
            </tr>
            <tr>
              <td>สาขาวิชา</td>
              <td>จำนวนหน่วยกิตที่เรียน</td>
            </tr>
            <tr>
              <td>GPAX</td>
              <td>ระดับการศึกษา</td>
            </tr>
            <tr>
              <td>ชื่อปริญญา</td>
            </tr>
            <tr>
              <td>วิทยาเขต</td>
              <td>ปีการศึกษาที่เข้า</td>
            </tr>
            <tr>
              <td>สถานภาพ</td>
              <td>วิธีรับเข้า</td>
            </tr>
            <tr>
              <td>วุฒิก่อนเข้ารับการศึกษา</td>
              <td>จบการศึกษาจาก</td>
            </tr>
            <tr>
              <td>อาจารย์ที่ปรึกษา</td>
            </tr>
            <tr>
              <td>Facebook</td>
              <td>Line</td>
            </tr>
          </table>

          <table style="width:100%">
            <tr>
              <TH>2. ที่อยู่ตามทะเบียนบ้าน</TH>
            </tr>
            <tr>
              <td>บ้านเลขที่</td>
              <td>หมู่</td>
              <td>ซอย</td>
              <td>ตำบล</td>
              <td>เขต / อำเภอ</td>
            </tr>
            <tr>
              <td>จังหวัด</td>
              <td>รหัสไปรษณีย์</td>
              <td>โทรศัพท์</td>
              <td>E-mail</td>
            </tr>
          </table>

          <table style="width:100%">
            <tr>
              <TH>3. ที่อยู่ปัจจุบัน</TH>
            </tr>
            <tr>
              <td>หอพัก</td>
              <td>ห้อง</td>
              <td>โทรศัพท์</td>
              <td>มือถือ</td>
            </tr>
            <tr>
              <td>บ้านเลขที่</td>
              <td>หมู่</td>
              <td>ซอย</td>
              <td>ตำบล</td>
              <td>เขต / อำเภอ</td>
            </tr>
            <tr>
              <td>จังหวัด</td>
              <td>รหัสไปรษณีย์</td>
              <td>โทรศัพท์</td>
              <td>E-mail</td>
            </tr>
          </table>

          <table style="width:100%">
            <tr>
              <TH>4. ข้อมูลครอบครัว</TH>
            </tr>
            <tr>
              <td>ชื่อบิดา</td>
              <td>อาชีพ</td>
              <td>เบอร์โทร</td>
              <td>สถานภาพ</td>
            </tr>
            <tr>
              <td><h5>ที่อยู่บิดา</h5></td>
            </tr>
            <tr>
              <td>บ้านเลขที่</td>
              <td>หมู่</td>
              <td>ซอย</td>
              <td>ตำบล</td>
              <td>เขต / อำเภอ</td>
            </tr>
            <tr>
              <td>จังหวัด</td>
              <td>รหัสไปรษณีย์</td>
              <td>โทรศัพท์</td>
              <td>E-mail</td>
            </tr>
            <tr>
              <td>ชื่อมารดา</td>
              <td>อาชีพ</td>
              <td>เบอร์โทร</td>
              <td>สถานภาพ</td>
            </tr>
            <tr>
              <td><h5>ที่อยู่มารดา</h5></td>
            </tr>
            <tr>
              <td>บ้านเลขที่</td>
              <td>หมู่</td>
              <td>ซอย</td>
              <td>ตำบล</td>
              <td>เขต / อำเภอ</td>
            </tr>
            <tr>
              <td>จังหวัด</td>
              <td>รหัสไปรษณีย์</td>
              <td>โทรศัพท์</td>
              <td>E-mail</td>
            </tr>
          </table>

          <table style="width:100%">
            <tr>
              <TH>5. ข้อมูลผู้ปกครอง</TH>
            </tr>
            <tr>
              <td>ชื่อ</td>
              <td>ความสัมพันธ์</td>
            </tr>
            <tr>
              <td>บ้านเลขที่</td>
              <td>หมู่</td>
              <td>ซอย</td>
              <td>ตำบล</td>
              <td>เขต / อำเภอ</td>
            </tr>
            <tr>
              <td>จังหวัด</td>
              <td>รหัสไปรษณีย์</td>
              <td>โทรศัพท์</td>
              <td>E-mail</td>
            </tr>
          </table>

          <table style="width:100%">
            <tr>
              <TH></TH>
            </tr>
            <tr>
              <td>6. สถานภาพการรับทุน</td>
            </tr>
          </table>

          <table style="width:100%">
            <tr>
              <TH></TH>
            </tr>
            <tr>
              <td>7. ทำโปรเจท ไปสหกิจ</td>
            </tr>
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
