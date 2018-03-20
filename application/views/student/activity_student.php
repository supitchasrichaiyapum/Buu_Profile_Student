<Body>
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

        <form  method="get"  action="activity_student">
          <div class="container">
            <div class="row">
              <div class="col-md-6"><BR>
                <h2>การตรวจสอบชั่วโมงกิจกรรม</h2><BR>
                  <div id="custom-search-input">
                    <div class="input-group col-md-7">
                      <input type="text" name="textfield" id="textfield" class="form-control input-lg" placeholder="ค้นหารหัสนิสิต" maxlength ="8">&nbsp;&nbsp;
                      <input type="submit" name="button" id="button" value="ตกลง" class="btn btn-primary">
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </form> <BR>
        
        <table id="example" class="table table-striped table-bordered datatable" cellspacing="0" width="100%">
                     


                      <?php

                        if(count($result) == 0 && $student_code != '') {

                          echo "ไม่มีข้อมูล";

                        } else if(count($result) > 0) {

                          echo "รหัสนิสิต : "." ".$result[0]->Student_Student_ID." <br>";
                          echo "ชื่อ - นามสกุล : "." ".$result[0]->MrMs." ".$result[0]->Student_NameTH." ".$result[0]->Student_LNameTH." <br>";
                          echo "หลักสูตร : "." ".$result[0]->Course;
                          echo "<br><br>";
                          echo "<TR>";
                          echo "<TD><center>ชื่อกิจกรรม</TD>";
                          echo "<TD><center>เทอม</TD>";
                          echo "<TD><center>ปี</TD>";
                          echo "<TD><center>ชั่วโมง</TD>";
                          echo "</TR>";

                          foreach($result as $row) {

                          echo "<TR>";
                          echo "<TD>$row->Activitie_Name</TD>";
                          echo "<TD align = 'right'>$row->Activity_Term</TD>";
                          echo "<TD align = 'right'>$row->Activity_Year</TD>";
                          echo "<TD align = 'right'>$row->Hour</TD>";
                          echo "</TR>";

                          }
                        }
                      ?>
                  </table>  
</Body>
