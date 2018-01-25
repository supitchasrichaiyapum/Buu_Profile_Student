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
</div>
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