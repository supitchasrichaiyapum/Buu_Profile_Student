<div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h1 class="no-margin-bottom"><center>ข้อมูลกิจกรรม</center></h1>
            </div>
          </header>
<Body>
        <form  method="get"  action="activity_student">
          <div class="container">
            <div class="row">
              <div class="col-md-6"><BR>
                <h2>การตรวจสอบชั่วโมงกิจกรรม</h2><BR>
                  <div id="custom-search-input">
                    <div class="input-group col-md-12">
                      <input type="text" name="textfield" id="textfield" class="form-control input-lg" placeholder="ค้นหารหัสนิสิต" required="required">&nbsp;&nbsp;
                    <span class="input-group-btn">
                      <input type="submit" name="button" id="button" value="ตกลง" class="btn btn-info btn-lg">
                    </span>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </form> <BR>

<section class="dashboard-counts no-padding-bottom">
  <div class="container-fluid">
    <div class="row bg-white has-shadow">
        <div class="container">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="banner text-left">
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
                          echo "<TD><center><B>ชื่อกิจกรรม</TD>";
                          echo "<TD><center><B>วัน เดือน ปี</TD>";
                          echo "<TD><center><B>ชั่วโมง</TD>";
                          echo "</TR>";

                          while($row = $result->fetch_object()) {
                            echo "<TR>";
                            echo "<TD><center>$row->Activitie_Name</TD>";
                            echo "<TD><center>$row->Activitie_Date</TD>";
                            echo "<TD><center>$row->Hour</TD>";
                            echo "</TR>";

                          }
                        }
                      }
                      ?>
                  </table>  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</Body>
