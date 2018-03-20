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
              <strong><center>ผลการศึกษา</strong>
            </div>
            <div class="card-body">
              <p class="text-muted"><?php echo $student['Student_ID'] ?> : <?php echo $student['MrMs'] ?> <?php echo $student['Student_NameTH'] ?> <?php echo $student['Student_LNameTH'] ?> </p>
              <p class="text-muted">หลักสูตร : <?php echo $student['Course'] ?> </p>
              <p class="text-muted">สถานภาพ : <?php echo $student['Status_ID'] ?> </p>
              <br>
              <table class="table table-responsive-sm table-bordered">
                <thead>
                  <tr>
                  <th colspan="4"><CENTER>ภาคการศึกษาที่ &nbsp; 1/2557 </CENTER></th>
                  </tr>
                  <tr>
                  <th>รหัสวิชา</th>
                  <th>ชื่อรายวิชา</th>
                  <th>หน่วยกิต</th>
                  <th>เกรด</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($transcript as $row) { ?>
                    <tr>
                      <td><?php echo $row->Subject_Code ?> </td>
                      <td><?php echo $row->Subject_Name ?> </td>
                      <td><?php echo $row->Subject_Credit ?> </td>
                      <td><?php echo $row->Grade ?> </td>
                    </tr>      
                  <?php } ?>
                </tbody>
            </table>

            <table width="100%" bgcolor="#D0D0D0" border="0" cellspacing="0" cellpadding="0" class="table table-responsive-sm table-bordered">
              <tbody>
                <tr>
                  <td>
                    <table border="0" width="100%" cols="6" cellspacing="1" cellpadding="0" class="normaldetail">
                      <tbody><tr valign="TOP" bgcolor="#F6F0F0">
                        <td colspan="5" bgcolor="#D0D0D0"></td>
                        <td colspan="5" align="center" bgcolor="#E0E0E0">
                        <font color="#5050A0"><b> ผลการศึกษา </b></font></td></tr>
                        <tr height="20">
                          <td bgcolor="#D0D0D0" colspan="5" align="center" width="50%">THIS SEMESTER</td>
                          <td bgcolor="#E0E0E0" colspan="5" align="center" width="50%"><b>CUMULATIVE TO THIS SEMESTER</b></td>
                        </tr>
                        <tr bgcolor="#FFFFFF">
                          <td align="CENTER" bgcolor="#F0F7F7">
                          <a title="Credits Registered">C.Register</a>
                          <br>15</td><td align="CENTER" bgcolor="#F0F7F7">
                          <a title="Credits Satisfied">C.Earn</a><br>15</td>
                          <td align="CENTER" bgcolor="#F0F7F7"><a title="Credits Attempted">CA</a><br>15</td>
                          <td align="CENTER" bgcolor="#F0F7F7"><a title="Point">GP</a><br>31.5</td>
                          <td align="CENTER" bgcolor="#F0F7F7"><a title="Grade Point Average">GPA</a><br>2.10</td>
                          <td align="CENTER"><b><a title="Credits Registered">C.Register</a></b><br>15</td>
                          <td align="CENTER"><b><a title="Credits Satisfied">C.Earn</a></b><br>15</td>
                          <td align="CENTER"><b><a title="Credits Attempted">CA</a></b><br>15</td>
                          <td align="CENTER"><b><a title="Point">GP</a></b><br>31.5</td>
                          <td align="CENTER"><b><a title="Grade Point Average">GPA</a></b><br>2.10</td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
</Body>