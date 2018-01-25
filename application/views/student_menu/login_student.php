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
                <?php if($student) { ?>
                <li class="nav-item"><a href="<?php echo site_url('/c_login/logout');?>">Logout <i class="fa fa-sign-out"></i></a></li>
                <?php } else { ?>
                  <li class="nav-item"><a href="<?php echo site_url('/welcome/login');?>">Login <i class="fa fa-sign-out"></i></a></li>
                <?php } ?>
              </ul>
            </div>
          </div>
        </nav>
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
