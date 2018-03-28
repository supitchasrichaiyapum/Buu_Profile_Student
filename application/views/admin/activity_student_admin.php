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
  
        <div class="content-inner" >
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h1 class="no-margin-bottom"><center>กิจกรรม</center></h1>
            </div>
          </header>
          
          <section class="dashboard-counts no-padding-bottom">
           
              <div class="row bg-white has-shadow">
                <!-- Item -->
                <div class="container"><br>
                <div align="right">
                    <a href="<?php echo site_url('admin/c_admin/insert_form_activity');?>"><button type="submit" class="btn btn-success btn-sm" >เพิ่ม</button></a>
                    </div>
                </div>
                  <div class="container" >
                  
                  <br>
                      <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                                  <tr>
                                    <th></th>
                                    <th>ชื่อกิจกรรม</th>
                                    <th>เทอม</th>
                                    <th>ปีการศึกษา</th>  
                                    <th>ชั่วโมง</th>  
                                    
                                    <th></th>             
                                  </tr>
                      </thead>   
                      <tbody>
                      <?php $i=1; foreach ($result as $row) { ?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $row['Activitie_Name'];?></td>
                            <td><?php echo $row['Activity_Term'];?></td>
                            <td><?php echo $row['Activity_Year'];?></td>
                            <td><?php echo $row['Hour'];?></td>
                            <td><center>
                              <a href="<?php echo site_url('admin/c_admin/activity_detail/'.$row['Activitie_ID']);?>">
                              <button type="button" class="btn btn-primary btn-sm"></i> รายละเอียด</button>&nbsp;
                              <a href="<?php echo site_url('admin/c_admin/form_editactivity_student_admin/'.$row['Activitie_ID']);?>">
                              <button type="button" class="btn btn-warning btn-sm"></i> แก้ไข</button><br>
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

	
	