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

<table id="datatable" class="table table-striped table-bordered">
<thead>
            <tr>
                <th>Name</th>
                <th>Date</th>
                <th>Received</th>
                <th>Student_Code</th>
                <th>Student_Name</th>
            </tr>
</thead>   
<tbody>
<?php foreach ($query as $row) { ?>


<tr>
<td><?php echo $row['Award_Name'] ?> </td>
<td><?php echo $row['Award_Date'] ?> </td>
<td><?php echo $row['Received_Award'] ?> </td>
<td><?php echo $row['Student_Code'] ?> </td>
<td><?php echo $row['Student_Name'] ?> </td>
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
