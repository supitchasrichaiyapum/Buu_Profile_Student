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
              <p class="text-muted"><?php echo $result['Student_ID'] ?> : <?php echo $result['Prefix'] ?> <?php echo $result['Student_NameTH'] ?> <?php echo $result['Student_LNameTH'] ?> </p>
              <p class="text-muted">หลักสูตร : <?php echo $result['Course'] ?> </p>
              <p class="text-muted">สถานภาพ : <?php echo $status[0]->Status_Name ?> </p>
              <p class="text-muted">หน่วยกิตรวม : <?php $allCA = 0; foreach ($GPA as $row) { $allCA += $row->CA; } echo $allCA;?> </p>
              <br>

              <table border="1" width="600" cellspacing="2" cellpadding="0" class="normaldetail">
                <thead>
                  <tr class="tableheaderdetail">
                  <th colspan="4" bgcolor="#8080ff" ><CENTER>ภาคการศึกษาที่ &nbsp; 1/<?php echo $result['Entry_Years'] ?></CENTER></th>
                  </tr>
                  <tr bgcolor="#E0E0FF">
                  <th><CENTER>รหัสวิชา</CENTER></th>
                  <th><CENTER>ชื่อรายวิชา</CENTER></th>
                  <th><CENTER>หน่วยกิต</CENTER></th>
                  <th><CENTER>เกรด</CENTER></th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($transcript as $row) { ?>
                    <tr bgcolor="#F6F6FF">
                      <?php if($row->Term_Number == 1 AND $result['Entry_Years'] == $row->Subject_Year) { ?>
                      <td width="100">&nbsp;&nbsp;&nbsp;<?php echo $row->Subject_Code ?> </td>
                      <td width="450">&nbsp;&nbsp;&nbsp;<?php echo $row->Subject_Name ?> </td>
                      <td width="70" align="CENTER"><?php echo $row->Subject_Credit ?> </td>
                      <td width="30">&nbsp;<?php echo $row->Grade ?> </td>
                    </tr>      
                  <?php } } ?>
                </tbody>
            </table> <br>

           <table border="1" width="600" cellspacing="2" cellpadding="0" class="normaldetail">
                <thead>
                  <tr class="tableheaderdetail">
                  <th colspan="4" bgcolor="#8080ff" ><CENTER>ภาคการศึกษาที่ &nbsp; 2/<?php echo $result['Entry_Years'] ?></CENTER></th>
                  </tr>
                  <tr bgcolor="#E0E0FF">
                  <th><CENTER>รหัสวิชา</CENTER></th>
                  <th><CENTER>ชื่อรายวิชา</CENTER></th>
                  <th><CENTER>หน่วยกิต</CENTER></th>
                  <th><CENTER>เกรด</CENTER></th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($transcript as $row) { ?>
                    <tr bgcolor="#F6F6FF">
                      <?php if($row->Term_Number == 2 AND $result['Entry_Years'] == $row->Subject_Year) { ?>
                      <td width="100">&nbsp;&nbsp;&nbsp;<?php echo $row->Subject_Code ?> </td>
                      <td width="450">&nbsp;&nbsp;&nbsp;<?php echo $row->Subject_Name ?> </td>
                      <td width="70" align="CENTER"><?php echo $row->Subject_Credit ?> </td>
                      <td width="30">&nbsp;<?php echo $row->Grade ?> </td>
                    </tr>      
                  <?php } } ?>
                </tbody>
            </table> <br>

            <table border="1" width="600" cellspacing="2" cellpadding="0" class="normaldetail">
                <thead>
                  <tr class="tableheaderdetail">
                  <th colspan="4" bgcolor="#8080ff" ><CENTER>ภาคการศึกษาที่ &nbsp; 3/<?php echo $result['Entry_Years'] ?></CENTER></th>
                  </tr>
                  <tr bgcolor="#E0E0FF">
                  <th><CENTER>รหัสวิชา</CENTER></th>
                  <th><CENTER>ชื่อรายวิชา</CENTER></th>
                  <th><CENTER>หน่วยกิต</CENTER></th>
                  <th><CENTER>เกรด</CENTER></th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($transcript as $row) { ?>
                    <tr bgcolor="#F6F6FF">
                      <?php if($row->Term_Number == 3 AND $result['Entry_Years'] == $row->Subject_Year) { ?>
                      <td width="100">&nbsp;&nbsp;&nbsp;<?php echo $row->Subject_Code ?> </td>
                      <td width="450">&nbsp;&nbsp;&nbsp;<?php echo $row->Subject_Name ?> </td>
                      <td width="70" align="CENTER"><?php echo $row->Subject_Credit ?> </td>
                      <td width="30">&nbsp;<?php echo $row->Grade ?> </td>
                    </tr>      
                  <?php } } ?>
                </tbody>
            </table> <br>

        
</Body>