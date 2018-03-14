<style>

table {
    width:60%;
}
th, td {
    padding: 5px;
    text-align: left;
}
section.dashboard-counts .row {
  padding: 5px 5px;
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
              <th>ชื่อรางวัล</th>
              <th>เทอม</th>
              <th>ปีการศึกษา</th>
              <th>วัน / เดือน / ปี </th>
              <th>รหัสนิสิต</th>
              <th>ชื่อ - นามสกุล</th>
              <th>เงินรางวัล</th>
              <th>อาจารย์ผู้ช่วย</th>
            </tr>
</thead>   
<tbody>
        <?php foreach ($result as $row) { ?>

            <tr>
              <td><?php echo $row->Award_Name ?> </td>
              <td><?php echo $row->Award_Term ?> </td>
              <td><?php echo $row->Award_Year ?> </td>
              <td><?php echo $row->Award_Date ?> </td>
              <td><?php echo $row->Student_ID ?> </td>
              <td><?php echo $row->MrMs." ".$row->Student_NameTH." ".$row->Student_LNameTH ?>
              <td><?php echo $row->Award_Amount ?> </td>
              <td><?php echo $row->Award_Giver ?> </td>
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
