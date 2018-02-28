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
              <h1 class="no-margin-bottom"><center>ข้อมูลกิจกรรม</center></h1>
            </div>
          </header>

          <section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">
              <div class="row bg-white has-shadow">
                <!-- Item -->
                <div class="container">
                  

<table id="datatable" class="table table-hover table-bordered table-striped">
<thead>
            <tr>
                <th>ปีการศึกษา</th>
                <th>เทอม</th>
                <th>ชื่อกิจกรรม</th>
                <th>รหัสนิสิต</th>
                <th>ชื่อ - นามสกุล</th>
                <th>ชั่วโมง</th>
            </tr>
</thead>
<tbody>
<?php foreach ($query as $row) { ?>


<tr>

<td><?php echo $row['Activity_Year'] ?> </td>
<td><?php echo $row['Activity_Term'] ?> </td>
<td><?php echo $row['Activitie_Name'] ?> </td>
<td><?php echo $row['Student_Student_ID'] ?> </td>
<td><?php echo $row['Student_NameTH'] ?> </td>
<td><?php echo $row['Student_LNameTH'] ?> </td>
<td><?php echo $row['Hour'] ?> </td>

</tr>      


<?php } ?>
</tbody>
</table>             

  
                  </div>
                </div>
              </div>
            </div>
          </section>           

    <script>
      $(document).ready(function() {
          $('#datatable').DataTable();
      } );
    </script>
