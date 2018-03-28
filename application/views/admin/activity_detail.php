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
              <h1 class="no-margin-bottom"><center>กิจกรรม</center></h1>
            </div>
          </header>

          <section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">
              <div class="row bg-white has-shadow">
                <!-- Item -->
                <div class="container"><br>
                <div align="right">
                    <a href="<?php echo site_url('admin/c_admin/insert_form_student_activity/'.$activity_id);?>">
                    <button type="submit" class="btn btn-success btn-sm" >เพิ่ม</button></a>
                    </div> <br>
				          
                  <div class="container">
                  
                  <br>
<table id="datatable" class="table table-striped table-bordered">
<thead>
            <tr>

              <th>รหัสนิสิต </th>
              <th>ชื่อ - นามสกุล</th>
              
               
              <th></th>   
                        
            </tr>
</thead>   
<tbody>
  <?php foreach ($result1 as $row) { ?>
  <tr>
        <td><?php echo $row->Student_Student_ID ?> </td>
        <td><?php echo $row->MrMs." ".$row->Student_NameTH." ".$row->Student_LNameTH ?>    
        <td><center>
        
          <!-- <a href="<?php echo site_url('admin/c_admin/delete_award_has_student/'.$row->Student_ID);?>"> -->
          <form action="<?php echo site_url('admin/c_admin/delete_activity_has_student/');?>" method="post">
          <input type="hidden" id="Activity_Activitie_ID" name="Activity_Activitie_ID" value="<?php echo $activity_id; ?>">
          <input type="hidden" id="Student_Student_ID" name="Student_Student_ID" value="<?php echo $row->Student_Student_ID; ?>">
          <button type="submit" class="btn btn-danger btn-sm" >ลบ</button></a>
          </form>
        </center></td>
      

    
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

	
	