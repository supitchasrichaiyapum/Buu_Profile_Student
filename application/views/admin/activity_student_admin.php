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
              <strong><center>ข้อมูลกิจกรรม</strong>
            </div>
            <div class="card-body">
                <div class="container">
                    <div align="right">
                    <a href="add_activity_student"><button class="button" type="submit">เพิ่ม</button></a>
                    </dir> <br><br>
<table id="datatable" class="table table-striped table-bordered">
<thead>
            <tr>
                <th>ชื่อกิจกรรม</th>
                <th>เทอม</th>
                <th>ปี</th>
                <th>รหัสนิสิต</th>
                <th>ชั่วโมง</th>
                <th>การดำเนินการ</th>
            </tr>
</thead>   
<tbody>
<tr> 
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><center> <a href="activity_edit_student">แก้ไข </a> | ลบ <center></td>
</tr>      

</tbody>
<!-- <tbody>
<?php foreach ($query as $row) { ?>

<tr> 
<td><?php echo $row['Activitie_Name'] ?></td>
<td><?php echo $row['Activity_Term'] ?></td>
<td><?php echo $row['Activity_Year'] ?></td>
<td><?php echo $row['Student_Code'] ?></td>
<td><?php echo $row['Hour'] ?></td>
<td><center> <center></td>
<td><center> แก้ไข | ลบ <center></td>
</tr>      

<?php } ?>
</tbody> -->
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
