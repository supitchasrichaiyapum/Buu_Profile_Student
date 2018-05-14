<style>

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
header.page-header { 
  padding: 0px 0; 
  }
  </style>
<Body>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
            <ul class="breadcrumb">
                <li><a href="<?php echo site_url('teacher/c_teacher/menu_teacher');?>">หน้าหลัก</a></li>
                <li><a href="<?php echo site_url('teacher/c_teacher/activity_student_teacher');?>">ข้อมูลนิสิต</a></li>
                <li>ผลการศึกษา</li>
            </ul>
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
              <p class="text-muted"><?php echo $result['Student_ID'] ?> : <?php echo $result['Student_Prefix'] ?> <?php echo $result['Student_Name_Th'] ?> <?php echo $result['Student_Lname_Th'] ?> </p>
              <p class="text-muted">หลักสูตร : <?php echo $result['Course'] ?> </p>
              <p class="text-muted">สถานภาพ : <?php echo $status[0]->Status_Name ?> </p>
              <p class="text-muted">หน่วยกิตรวม : <?php echo $CA[0]->sum ?> </p>
              <p class="text-muted">GPAX : <?php echo $result['GPAX']?> </p>
              <br>

              <?php foreach($transcript_rows as $row_table) { ?>

                <table border="1" width="600" cellspacing="2" cellpadding="0" class="table table-responsive-sm table-bordered">
                  <thead>
                    <tr>
                    <th colspan="4" bgcolor="#8080ff" ><CENTER>ภาคการศึกษาที่ &nbsp; <?php echo $row_table->GPA_Term.'/'.$row_table->GPA_Year;?></CENTER></th>
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
                        <?php if($row->Term_Number == $row_table->GPA_Term && $row_table->GPA_Year == $row->Subject_Year) { ?>
                        <td width="100"><?php echo $row->Subject_Code ?> </td>
                        <td><?php echo $row->Subject_Name ?> </td>
                        <td width="70" align="CENTER"><?php echo $row->Subject_Credit ?> </td>
                        <td width="30" align="CENTER"><?php echo $row->Grade ?> </td>
                      </tr>      
                    <?php } } ?>
                  </tbody>
              </table> <br>
            <?php } ?>

        
</Body>