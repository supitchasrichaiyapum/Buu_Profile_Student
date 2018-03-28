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
              <h1 class="no-margin-bottom"><center>รางวัลการแข่งขัน</center></h1>
            </div>
          </header>
          
          <section class="dashboard-counts no-padding-bottom">
           
              <div class="row bg-white has-shadow">
                <!-- Item -->
                <div class="container"><br>             
                  <div class="container" >
                  
                  <br>
                      <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                                  <tr>
                                    <th></th>
                                    <th>ชื่อรางวัล</th>
                                    <th>เทอม</th>
                                    <th>ปีการศึกษา</th>  
                                    <th>อาจารย์ผู้ช่วย</th>  
                                    <th>เงินรางวัล(บาท)</th>
                                    
                                    <th></th>             
                                  </tr>
                      </thead>   
                      <tbody>
                      <?php $i=1; foreach ($result as $row) { ?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $row['Award_Name'];?></td>
                            <td><?php echo $row['Award_Term'];?></td>
                            <td><?php echo $row['Award_Year'];?></td>
                            <td><?php echo $row['Award_Giver'];?></td>
                            <td><?php echo $row['Award_Amount'];?></td>
                            <td><center>
                              <a href="<?php echo site_url('user/c_user/award_detail_user/'.$row['Award_ID']);?>">
                                <button type="button" class="btn btn-primary btn-sm"></i> รายละเอียด</button>&nbsp;
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

	
	