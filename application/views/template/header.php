<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Project Student</title>
    <meta name="description">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.16/js/jquery.dataTables.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Athiti" rel="stylesheet">
    <style>
      body {
        font-family: 'Athiti', sans-serif;
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
                <!-- Navbar Brand --><a href="<?php echo site_url('/welcome');?>" class="navbar-brand">
                  <div class="brand-text brand-big"><span>BUU </span><strong> Profile Student</strong></div>
                  <div class="brand-text brand-small"><strong>BUU</strong></div></a>
                <!-- Toggle Button-->
                <a id="toggle-btn" href="<?php echo site_url('/');?>" class="menu-btn active"><span></span><span></span><span></span></a>

              </div>
              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <?php if(@$user_id) 
                   { 
                ?>
                <li class="nav-item"><a href="<?php echo site_url('/c_login/logout');?>">Logout <i class="fas fa-sign-out-alt"></i></a></li>
                <?php } else { ?>
                  <li class="nav-item"><a href="<?php echo site_url('/welcome/login');?>">Login <i class="fas fa-sign-out-alt"></i></a></li>
                <?php } ?>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <div class="page-content d-flex align-items-stretch">
 
