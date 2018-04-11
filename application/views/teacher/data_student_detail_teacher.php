<style>
table {
    width:100%;
}
th {
    padding: 5px;
    text-align: left;
    font-size: 1.3em;
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
<Body>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
            <ul class="breadcrumb">
            <li><a href="<?php echo site_url('admin/c_admin/menu_admin');?>">หน้าหลัก</a></li>
                <li>ข้อมูลนิสิต</li>
       
            </ul>
            </div>
          </header>
          <br>
        <Body>
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header">
              <h1><strong><center>ข้อมูลนิสิต</strong></h1>
            </div>
            <div class="card-body"><br>    
            
                <div align="right">
                <a href="<?php echo site_url("teacher/c_teacher/transcript_student_teacher/".$result['Student_ID']); ?>"><button type="submit" class="btn btn-sm btn-primary"> ผลการศึกษา </button></a>
                </div>
                

                <table style="width:100%">
                <tr>
                  <TH>1. ข้อมูลทั่วไป</TH>
                </tr>
                <tr>
                  <td><b>ชื่อ - นานสกุล(ภาษาไทย) : </b><?php echo $result['Student_Prefix']." ".$result['Student_Name_Th']." ".$result['Student_Lname_Th'] ?></td>
                  <td><b>ชื่อเล่น : </b><?php echo $result['Student_Nickname'] ?> </td>
                </tr>
                <tr>
                  <td><b>ชื่อ - นานสกุล(ภาษาอังกฤษ) : </b><?php echo $result['Student_Name_Eng'] ?> <?php echo $result['Student_Lname_Eng'] ?></td>
                  <td><b>เบอร์โทร : </b><?php echo $result['Student_Phone'] ?></td>
                </tr>
                  <tr>
                  <td><b>รหัสนิสิต : </b><?php echo $result['Student_ID'] ?></td>
                  <td><b>เลขบัตรประชาชน : </b><?php echo $result['Student_IdNum'] ?></td>
                </tr>
                <tr>
                  <td><b>ชั้นปี : </b><?php $level = $GPA_Year[0]->GPA_Year-$result['Entry_Years'] ; echo ++$level; ?></td>
                  <td><b>หลักสูตร : </b><?php echo $result['Course'] ?></td>
                </tr>
                <tr>
                  <td><b>สาขาวิชา : </b></td>
                  <td><b>จำนวนหน่วยกิตที่เรียน : </b><?php $allCA = 0; foreach ($GPA as $row) { if($row->GPA>0) $allCA += $row->CA; } echo $allCA;?></td>
                </tr>
                <tr>
                  <td><b>GPAX : </b><?php echo $result['GPAX'] ?></td>
                  <td><b>ระดับการศึกษา : </b><?php echo $result['Degree'] ?></td>
                </tr>
                <tr>
                  <td><b>ชื่อปริญญา : </b><?php echo $result['Level'] ?></td>
                  <td><b>กรุ๊ปเลือด : </b><?php echo $result['Blood'] ?></td>
                </tr>
                <tr>
                  <td><b>วิทยาเขต : </b><?php echo $result['Campus'] ?></td>
                  <td><b>ปีการศึกษาที่เข้า : </b><?php echo $result['Entry_Years'] ?></td>
                </tr>
                <tr>
                  <td><b>สถานภาพ : </b><?php echo $status[0]->Status_Name ?></td>
                  <td><b>วิธีรับเข้า : </b><?php echo $result['Entry_Method'] ?></td>
                </tr>
                <tr>
                  <td><b>วุฒิก่อนเข้ารับการศึกษา : </b><?php echo $result['Highes_Ed'] ?></td>
                  <td><b>จบการศึกษาจาก : </b><?php echo $result['Gradfromschool'] ?></td>
                </tr>
                <tr>
                  <td><b>สัญชาติ : </b><?php echo $result['Nationality'] ?></td>
                  <td><b>ศาสนา : </b><?php echo $result['Relidion'] ?></td>
                </tr>
                <tr>
                  <td><b>วัน / เดือน / ปี (ที่เกิด) : </b><?php echo thaiDate($result['Birthday'], true, false) ?></td>
                  <td><b>อาจารย์ที่ปรึกษา : </b></td>
                </tr>
                <tr>
                  <td><b>E-mail : </b><?php echo $result['Student_Email'] ?></td>
                </tr>
                <tr>
                  <td><b>Facebook : </b><?php echo $result['Facebook'] ?></td>
                  <td><b>Line : </b><?php echo $result['Line'] ?></td>
                </tr>
              </table>
    
              <table style="width:100%">
                <tr>
                  <TH>2. ที่อยู่ตามทะเบียนบ้าน</TH>
                </tr>
                <tr>
                  <td><b>บ้านเลขที่ : </b><?php echo $result['Home_Address_Number'] ?></td>
                  <td><b>หมู่ : </b><?php echo $result['Home_Address_Moo'] ?></td>
                  <td><b>ซอย : </b><?php echo $result['Home_Address_Soi'] ?></td>
                  <td><b>ตำบล : </b><?php echo $result['Home_Address_Tumbon'] ?></td>
                  <td><b>เขต / อำเภอ : </b><?php echo $result['Home_Address_Aumper'] ?></td>
                </tr>
                <tr>
                  <td><b>จังหวัด : </b><?php echo $result['Home_Address_Province'] ?></td>
                  <td><b>รหัสไปรษณีย์ : </b><?php echo $result['Home_Address_Postcode'] ?></td>
                  <td><b>โทรศัพท์ : </b><?php echo $result['Student_Phone'] ?></td>
                  <td><b>E-mail : </b><?php echo $result['Student_Email'] ?></td>
                </tr>
              </table>
    
              <table style="width:100%">
                <tr>
                  <TH>3. ที่อยู่ที่สามารถติดต่อได้(ที่อยู่ปัจจุบัน)</TH>
                </tr>
                <tr>
                  <td><b>บ้านเลขที่ : </b><?php echo $result['Address_Number'] ?></td>
                  <td><b>หมู่ : </b><?php echo $result['Address_Moo'] ?></td>
                  <td><b>ซอย : </b><?php echo $result['Address_Soi'] ?></td>
                  <td><b>ตำบล : </b><?php echo $result['Address_Tumbon'] ?></td>
                  <td><b>เขต / อำเภอ : </b><?php echo $result['Address_Aumper'] ?></td>
                </tr>
                <tr>
                  <td><b>จังหวัด : </b><?php echo $result['Address_Province'] ?></td>
                  <td><b>รหัสไปรษณีย์ : </b><?php echo $result['Address_Postcode'] ?></td>
                  <td><b>โทรศัพท์ : </b><?php echo $result['Address_Phone'] ?></td>
                  <td><b>E-mail : </b><?php echo $result['Address_Email'] ?></td>
                </tr>
              </table>
    
              <table style="width:100%">
                <tr>
                  <TH>4. ข้อมูลครอบครัว</TH>
                </tr>
                <tr>
                  <td><b>ชื่อบิดา : </b><?php echo $result['Father_Name'] ?></td>
                  <td><b>อาชีพ : </b><?php echo $result['Father_Career'] ?></td>
                  <td><b>เบอร์โทร : </b><?php echo $result['Father_Phone'] ?></td>
                  <td><b>สถานภาพ : </b><?php echo $result['Father_Status'] ?></td>
                </tr>
                <tr>
                  <td><h5>ที่อยู่บิดา</h5></td>
                </tr>
                <tr>
                  <td><b>บ้านเลขที่ : </b><?php echo $result['Father_Address_Number'] ?></td>
                  <td><b>หมู่ : </b><?php echo $result['Father_Address_Moo'] ?></td>
                  <td><b>ซอย : </b><?php echo $result['Father_Address_Soi'] ?></td>
                  <td><b>ตำบล : </b><?php echo $result['Father_Address_Tumbon'] ?></td>
                  <td><b>เขต / อำเภอ : </b><?php echo $result['Father_Address_Aumper'] ?></td>
                </tr>
                <tr>
                  <td><b>จังหวัด : </b><?php echo $result['Father_Address_Province'] ?></td>
                  <td><b>รหัสไปรษณีย์ : </b><?php echo $result['Father_Address_Postcode'] ?></td>
                  <td><b>E-mail : </b><?php echo $result['Father_Email'] ?></td>
                </tr>
                <tr>
                  <td><b>ชื่อมารดา : </b><?php echo $result['Mother_Name'] ?></td>
                  <td><b>อาชีพ : </b><?php echo $result['Mother_Career'] ?></td>
                  <td><b>เบอร์โทร : </b><?php echo $result['Mother_Phone'] ?></td>
                  <td><b>สถานภาพ : </b><?php echo $result['Mother_Status'] ?></td>
                </tr>
                <tr>
                  <td><h5>ที่อยู่มารดา</h5></td>
                </tr>
                <tr>
                  <td><b>บ้านเลขที่ : </b><?php echo $result['Mother_Address_Number'] ?></td>
                  <td><b>หมู่ : </b><?php echo $result['Mother_Address_Moo'] ?></td>
                  <td><b>ซอย : </b><?php echo $result['Mother_Address_Soi'] ?></td>
                  <td><b>ตำบล : </b><?php echo $result['Mother_Address_Tumbon'] ?></td>
                  <td><b>เขต / อำเภอ : </b><?php echo $result['Mother_Address_Aumper'] ?></td>
                </tr>
                <tr>
                  <td><b>จังหวัด : </b><?php echo $result['Mother_Address_Province'] ?></td>
                  <td><b>รหัสไปรษณีย์ : </b><?php echo $result['Mother_Address_Postcode'] ?></td>
                  <td><b>E-mail : </b><?php echo $result['Mother_Email'] ?></td>
                </tr>
              </table>
    
              <table style="width:100%">
                <tr>
                  <TH>5. ข้อมูลผู้ปกครอง</TH>
                </tr>
                <tr>
                  <td><b>ชื่อ  : </b><?php echo $result['Parent_Name'] ?></td>
                  <td><b>ความสัมพันธ์  : </b><?php echo $result['Parent_Status'] ?></td>
                </tr>
                <tr>
                  <td><b>บ้านเลขที่ : </b><?php echo $result['Parent_Address_Number'] ?></td>
                  <td><b>หมู่ : </b><?php echo $result['Parent_Address_Moo'] ?></td>
                  <td><b>ซอย : </b><?php echo $result['Parent_Address_Soi'] ?></td>
                  <td><b>ตำบล : </b><?php echo $result['Parent_Address_Tumbon'] ?></td>
                  <td><b>เขต / อำเภอ : </b><?php echo $result['Parent_Address_Aumper'] ?></td>
                </tr>
                <tr>
                  <td><b>จังหวัด : </b><?php echo $result['Parent_Address_Province'] ?></td>
                  <td><b>รหัสไปรษณีย์ : </b><?php echo $result['Parent_Address_Postcode'] ?></td>
                  <td><b>โทรศัพท์ : </b><?php echo $result['Parent_Phone'] ?></td>
                  <td><b>E-mail : </b><?php echo $result['Parent_Email'] ?></td>
                </tr>
              </table>

              <table>
            <tr>
              <TH>6. ที่อยู่ของผู้ที่ติดต่อ</TH>
            </tr>
            <tr>
              <td><b>ชื่อ  : </b><?php echo $result['Contact_Name'] ?></td>
              <td><b>ความสัมพันธ์  : </b><?php echo $result['Contact_Status'] ?></td>
            </tr>
            <tr>
              <td><b>ที่อยู่ผู้ติดต่อได้ : </b><?php echo $result['Contact_Address_Number'] ?></td>
              <td><b>ตำบล / แขวง : </b><?php echo $result['Contact_Address_Tumbon'] ?></td>
              <td><b>เขต / อำเภอ : </b><?php echo $result['Contact_Address_Aumper'] ?></td>
              <td><b>จังหวัด : </b><?php echo $result['Contact_Address_Province'] ?></td>
            </tr>
            <tr>
              <td><b>รหัสไปรษณีย์ : </b><?php echo $result['Contact_Address_Postcode'] ?></td>
              <td><b>โทรศัพท์ : </b><?php echo $result['Contact_Phone'] ?></td>
              <td><b>E-mail : </b><?php echo $result['Contact_Email'] ?></td>
            </tr>
          </table>
    
              <table>
            <tr>
              <TH>7. สถานภาพการรับทุน</TH>
            </tr>
            <tr>
            <?php 
            if(count($scholarship) == 0) {
                echo "<td>ไม่มีข้อมูล</td>";
            } else if(count($scholarship)) { ?>

              <td><b>ชื่อทุน </b></td>
              <td><b>ผู้มอบทุน </b></td>
              <td><b>ปีการศึกษา</b></td>
              <td><b>จำนวนเงิน(บาท) </b></td>

            </tr>

            <?php foreach ($scholarship as $student) { ?>

            <tr>
            <td><?php echo $student->Scholarship_Name ?></td>
            <td><?php echo $student->Scholarship_Giver ?></td>
            <td><?php echo $student->Scholarship_Year ?></td>
            <td><?php echo $student->Scholarship_Amount ?></td>
            </tr>

            <?php   } 
                  } ?>
          </table>

          <table>
            <tr>
              <TH>8. ข้อมูลกิจกรรม</TH>
            </tr>
            <?php 
            if(count($activity) == 0) {
                echo "<td>ไม่มีข้อมูล</td>";
            } else if(count($activity)) { ?>

                  <tr>
                  <td><b>ชื่อกิจกรรม </td>
                  <td><b>เทอม </td>
                  <td><b>ปีการศึกษา </td>
                  <td><b>ชั่วโมง </td>
                  </tr>
            
            <?php foreach ($activity as $student) { ?>
            <tr>
            <td><?php echo $student->Activitie_Name ?></td>
            <td><?php echo $student->Activity_Term ?></td>
            <td><?php echo $student->Activity_Year ?></td>
            <td><?php echo $student->Hour ?></td>
            </tr>
            <?php  
                  }
                } ?>
            
            
          </table>

          <table>
            <tr>
              <TH>9. ข้อมูลรางวัลการแข่งขัน</TH>
            </tr>
            <tr>

            <?php 
            if(count($award) == 0) {
                      echo "<td>ไม่มีข้อมูล</td>";
            } else if(count($award)) { ?>

              <td><b>ชื่อรางวัลการแข่งขัน </b></td>
              <td><b>เทอม </b></td>
              <td><b>ปีการศึกษา </b></td>
              <td><b>เงินรางวัล </b></td>
              <td><b>อาจารย์ผู้ช่วย </b></td>

            </tr>

            <?php foreach ($award as $student) { ?>
            <tr>
            <td><?php echo $student->Award_Name ?></td>
            <td><?php echo $student->Award_Term ?></td>
            <td><?php echo $student->Award_Year ?></td>
            <td><?php echo $student->Award_Amount ?></td>
            <td><?php echo $student->Award_Giver ?></td>
            </tr>
            <?php   } 
                  }  ?>

          </table>

          <?php  ?>
          </table>
          <br>
</Body>