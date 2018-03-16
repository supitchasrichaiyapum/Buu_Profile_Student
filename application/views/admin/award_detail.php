<style>
table {
    width:100%;
}
th, td {
    padding: 5px;
    text-align: left;
}
section.dashboard-counts .row {
  padding: 5px 5px;
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
                <div class="container"><br>
                <div align="right">
                    <!-- <a href="<?php echo site_url('admin/c_admin/add_award_student');?>"><button class="button" type="submit">เพิ่ม</button></a> -->
                    <a href="<?php echo site_url('admin/c_admin/add_award_student');?>"><button type="submit" class="btn btn-success btn-sm" >เพิ่ม</button></a>
                    </div> <br>
				          
                  <div class="container">
                  
                  <br>
<table id="datatable" class="table table-striped table-bordered">
<thead>
            <tr>

              <th>วัน เดือน ปี </th>
              <th>รหัสนิสิต </th>
              <th>ชื่อ - นามสกุล</th>
              <th>เงินรางวัล(บาท)</th>
              <th>อาจารย์ผู้ช่วย</th>   
              <th></th>   
                        
            </tr>
</thead>   
<tbody>
  <?php foreach ($result1 as $row) { ?>
  <tr>
        <td><?php echo $row->Award_Date ?> </td>
        <td><?php echo $row->Student_ID ?> </td>
        <td><?php echo $row->MrMs." ".$row->Student_NameTH." ".$row->Student_LNameTH ?>
        <td><?php echo $row->Award_Amount ?> </td>
        <td><?php echo $row->Award_Giver ?> </td>
        <td>
            <button type="button" class="btn btn-danger btn-sm"></i> ลบ</button>
        </td>
      

    
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

	
	