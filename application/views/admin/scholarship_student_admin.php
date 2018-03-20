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
              <strong><center>ทุนการศึกษา</strong>
            </div>
            <div class="card-body">
                <div class="container">
                <div align="right">
                    <a href="<?php echo site_url('admin/c_admin/add_scholarship_student');?>"><button type="submit" class="btn btn-success btn-sm" >เพิ่ม</button></a>
                    </div>
                </div><br><br>
                <table id="datatable" class="table table-striped table-bordered">
                  <thead>
                      <tr>
                        <th>ชื่อทุนการศึกษา</th>
                        <th>ผู้มอบทุนการศึกษา</th>
                        <th>จำนวนเงิน(บาท)</th>
                        <th></th>
                      </tr>
                  </thead>   
                  <tbody>
                    <?php $i=1; foreach ($result as $row) { ?>
                    <tr> 
                      <td><?php echo $row['Scholarship_Name'] ?></td>
                      <td><?php echo $row['Scholarship_Giver'] ?></td>
                      <td><?php echo $row['Scholarship_Amount'] ?></td>
                      <td><center>
                        <a href="<?php echo site_url('admin/c_admin/scholarship_detail/'.$row['Scholarship_ID']);?>">
                        <button type="button" class="btn btn-primary btn-sm"></i> รายละเอียด</button>&nbsp;
                        <a href="<?php echo site_url('admin/c_admin/form_editscholarship_student_admin/'.$row['Scholarship_ID']);?>">
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
         


    <script>
      $(document).ready(function() {
          $('#datatable').DataTable();
      } );
    </script>

