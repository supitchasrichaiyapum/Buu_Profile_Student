<!DOCTYPE html>
<html>



                <!-- Navbar Brand --><a href="<?php echo site_url('/welcome');?>" class="navbar-brand">
                  <div class="brand-text brand-big"><span>BUU</span><strong>Project Student</strong></div>
                  <div class="brand-text brand-small"><strong>BUU</strong></div></a>
                <!-- Toggle Button-->
                <a id="toggle-btn" href="<?php echo site_url('/welcome');?>" class="menu-btn active"><span></span><span></span><span></span></a>
                  </div>

              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">

                <!-- Search-->

                <li class="nav-item d-flex align-items-center"><a id="search" href="#"></a></li>
                <!-- Login    -->


                <?php if($user_id) { ?>
                <li class="nav-item"><a href="<?php echo site_url('/c_login/logout');?>"> Logout <i class="fa fa-sign-out"></i></a></li>
                <?php } else { ?>
                  <li class="nav-item"><a href="<?php echo site_url('/welcome/login');?>"> Login <i class="fa fa-sign-out"></i></a></li>
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
           
            <div class="title" style="margin: 0 auto;">
              <h1 class="h5"> </h1>
              <p> </p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus-->
          <ul class="list-unstyled">
                    <li><a href="<?php echo site_url('/welcome/activity');?>"><i class="fa fa-calendar-check-o"></i> ข้อมูลกิจกรรม </a></li>
                    <li><a href="<?php echo site_url('/welcome/statistics');?>"><i class="fa fa-bar-chart"></i> สถิติจำนวนนิสิต </a></li>
                    <li><a href="<?php echo site_url('/welcome/coop');?>"><i class="fa fa-id-card"></i> ข้อมูลสหกิจ </a></li>
                    <li><a href="<?php echo site_url('/welcome/award');?>"><i class="fa fa-trophy"></i> รางวัลการแข่งขัน </a></li>
                    <li><a href="<?php echo site_url('/welcome/graduate');?>"><i class="fa fa-graduation-cap"></i> ผู้สำเร็จการศึกษา </a></li>
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
          <!-- Image Main-->
          <center>
          <div class="w3-content w3-section" style="max-width:1000px">
            <img class="mySlides" src="<?php echo base_url('theme/img/1.png');?>" style="width:100%; display: none;">
            <img class="mySlides" src="<?php echo base_url('theme/img/2.jpg');?>" style="width:100%; display: none;">
            <img class="mySlides" src="<?php echo base_url('theme/img/3.jpg');?>" style="width:100%; display: block;">
          </div>
           <BR> </center>
          <!-- Image Activity-->
        <center>
          <table border="0">
            <tr>
              <td><img class="col-sm-4" style="max-width:1000px" src="<?php echo base_url('theme/img/ds.png');?>"></td>
              <td><img class="col-sm-4" style="max-width:1000px" src="<?php echo base_url('theme/img/cs.png');?>"></td>
              <td><img class="col-sm-4" style="max-width:1000px" src="<?php echo base_url('theme/img/it.png');?>"></td>
              <td><img class="col-sm-4" style="max-width:1000px" src="<?php echo base_url('theme/img/se.png');?>"></td>
            <tr>
        </center>
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
