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

      <div class="page-content d-flex align-items-stretch"> 
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="http://reg.buu.ac.th/registrar/getstudentimage.asp?id=<?php echo $this->session->userdata('user_id');?>" alt="..." class="img-fluid rounded-circle"></div>
                <div class="title" style="margin: 0 auto;">
                    <h1 class="h5"> <?php echo $student['Student_NameTH'] ?> <?php echo $student['Student_LNameTH'] ?> </h1>
                        <p> <?php echo $student['Student_ID'] ?> </p>
                </div>
         </div>
          <!-- Sidebar Navidation Menus-->
          <ul class="list-unstyled">
                    <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> 
	                    <i class="icon-interface-windows"></i> ข้อมูลนิสิต </a>
		                    <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                                <li><a href="data_student"> ข้อมูลส่วนตัว </a></li>
                                <li><a href="edit_student"> แก้ไขข้อมูลส่วนตัว </a></li>
                                <li><a href="transcript"> ผลการศึกษา </a></li>
		                    </ul>
                    </li>
                    <li><a href="<?php echo site_url('#');?>"><i class="fa fa-bar-chart"></i> ข้อมูลกิจกรรม </a></li>
                    <li><a href="<?php echo site_url('#');?>"><i class="fa fa-id-card"></i> ข้อมูลสหกิจ </a></li>
                    <li><a href="<?php echo site_url('#');?>"><i class="fa fa-trophy"></i> ข้อมูลสถิติ </a></li>
          </ul>
        </nav>

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
