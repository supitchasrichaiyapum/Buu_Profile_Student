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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    ul.breadcrumb {
        padding: 10px 16px;
        list-style: none;
        background-color: #eee;
    }
    ul.breadcrumb li {
        display: inline;
        font-size: 18px;
    }
    ul.breadcrumb li+li:before {
        padding: 8px;
        color: black;
        content: "/\00a0";
    }
    ul.breadcrumb li a {
        color: #0275d8;
        text-decoration: none;
    }
    ul.breadcrumb li a:hover {
        color: #01447e;
        text-decoration: underline;
    }
</style>
  
        <div class="content-inner" >
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
            <ul class="breadcrumb">
            <li><a href="<?php echo site_url('admin/c_admin/menu_admin');?>">หน้าหลัก</a></li>
                <li>รางวัลการแข่งขัน</li>
       
            </ul>
            </div>
          </header>
          
          <section class="dashboard-counts no-padding-bottom">
           
              <div class="row bg-white has-shadow">
                <!-- Item -->
                
                <div class="container"><br>
                <center><h1 class="no-margin-bottom">รางวัลการแข่งขัน</h1></center><br>
                <div align="left">
                    <a href="<?php echo site_url('admin/c_admin/insert_form_award');?>"><button type="submit" class="btn btn-success btn-sm" >เพิ่มรายชื่อรางวัลหรือผลงาน</button></a>
                    </div>
                </div>
                  <div class="container" >
                  
                  <br>
                      <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                                  <tr>
                                    <th>วัน เดือน ปี</th>
                                    <th>ชื่อรางวัลหรือผลงาน</th>
                                    <th>เทอม</th>
                                    <th>ปีการศึกษา</th>  
                                    <th>อาจารย์ผู้ทำผลงานร่วม</th>  

                                    <th>เงินรางวัล(บาท)</th>

                                    <th></th>             
                                  </tr>
                      </thead>   
                      <tbody>
                      <?php $i=1; foreach ($result as $row) { ?>
                        <tr>
                            <td><?php echo $row['Award_Date'];?></td>
                            <td><?php echo $row['Award_Name'];?></td>
                            <td><?php echo $row['Award_Term'];?></td>
                            <td><?php echo $row['Award_Year'];?></td>
                            <td><?php echo $row['Award_Giver'];?></td>
                            <td><?php echo $row['Award_Amount'];?></td>
                            <td><center>

                              <a href="<?php echo site_url('admin/c_admin/award_detail/'.$row['Award_ID']."/".$row['Award_Year']);?>">
                              <button type="button" class="btn btn-primary btn-sm"></i> รายละเอียดผู้ได้รับรางวัล</button>&nbsp;

                              <a href="<?php echo site_url('admin/c_admin/form_editaward_student_admin/'.$row['Award_ID']);?>">                              
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

	
	