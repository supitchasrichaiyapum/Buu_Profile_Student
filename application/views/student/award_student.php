<style>

table {
    width:60%;
}
th, td {
    padding: 5px;
    text-align: left;
}

.button {
    background-color: #4CAF50;
    border: 1;
    color: white;
    padding: 5px 22px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
.button {border-radius: 8px;}
</style>
  
  <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
            </div>
          </header>
          <br>
        <Body>
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header">
              <strong><center>รางวัลการแข่งขัน</strong>
            </div>
            <div class="card-body">
                <div class="container">
                    <div align="right">
                    <a href="#"><button class="button" type="submit">เพิ่ม</button></a>
                    </dir> <br><br>
<table id="datatable" class="table table-striped table-bordered">
<thead>
            <tr>
                <th>Name</th>
                <th>Date</th>
                <th>Received</th>
                <th>Student_Code</th>
                <th>Student_Name</th>
                <th>modify</th>
            </tr>
</thead>   
<tbody>
<?php foreach ($query as $row) { ?>

<tr>
<td><?php echo $row['Award_Name'] ?></td>
<td><?php echo $row['Award_Date'] ?></td>
<td><?php echo $row['Received_Award'] ?></td>
<td><?php echo $row['Student_ID'] ?></td>
<td><?php echo $row['Student_Name'] ?></td>
<td><center> แก้ไข | ลบ <center></td>
</tr>      

<?php } ?>
</tbody>
</table>             

  
                  </div>
                </div>
              </div>
            </div>
         


    <script>
      $(document).ready(function() {
          $('#datatable').DataTable();
      } );
    </script>
