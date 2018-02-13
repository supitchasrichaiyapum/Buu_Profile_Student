
<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Project Student</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="robots" content="all,follow">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      
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
    width:60%;
}
th, td {
    padding: 5px;
    text-align: left;
}

      </style>
  
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h1 class="no-margin-bottom"><center>รางวัลการแข่งขัน</center></h1>
            </div>
          </header>

          <section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">
              <div class="row bg-white has-shadow">
                <!-- Item -->
                <div class="container">
                  <div class="container">

                    <table width="100%" hight="100%" border="0" cellpadding="0" cellspacing="0">                 
                        <?php foreach ($query as $row) { ?>
                          <tr>
                            <td><?php echo $row['Award_Name'] ?> </td>
                            <td><?php echo $row['Award_Date'] ?> </td>
                            <td><?php echo $row['Received_Award'] ?> </td>
                            <td><?php echo $row['Student_Code'] ?> </td>
                            <td><?php echo $row['Student_Name'] ?> </td>
                          </tr>      
                        <?php } ?>
                    </table>             

<table>
                    
<?php foreach ($query as $row) { ?>

<tr>
<td><?php echo $row['Award_Name'] ?> </td>
<td><?php echo $row['Award_Date'] ?> </td>
<td><?php echo $row['Received_Award'] ?> </td>
<td><?php echo $row['Student_Code'] ?> </td>
<td><?php echo $row['Student_Name'] ?> </td>
</tr>      

<?php } ?>

</table>             


                  </div>
                </div>
              </div>
            </div>
          </section>           