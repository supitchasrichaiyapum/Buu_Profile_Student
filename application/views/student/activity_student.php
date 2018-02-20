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
                        $host = "103.86.50.206";
                        $username = "buu_profile";
                        $password = "buu999";
                        $db = "profile_db";

                        $conn = new mysqli($host, $username, $password, $db);
                        $conn->query("set names utf8");

                        if(isset($_GET['button'])){
                        $searchall = $_GET['textfield'];

                        $sql = "SELECT * 
                            FROM Activity 
                            WHERE Student_Code like\"".$searchall."\"";

                        $result = $conn->query($sql);
                        if($result->num_rows ==0) {

                          echo "ไม่มีข้อมูล";

                        } else {
                          echo "<TR>";
                          echo "<TD><center>ชื่อกิจกรรม</TD>";
                          echo "<TD><center>ชั่วโมง</TD>";
                          echo "</TR>";

                          while($row = $result->fetch_object()) {
                            echo "<TR>";
                            echo "<TD><center>$row->Activitie_Name</TD>";
                            echo "<TD><center>$row->Hour</TD>";
                            echo "</TR>";

                          }
                        }
                      }
                      ?>
                  </table>  
</Body>
