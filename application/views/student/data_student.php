
    <style>
table {
    width:100%;
}
th {
    padding: 5px;
    text-align: left;
    font-size: 1.3em;
}
      </style>
  <body>

        <div class="content-inner">
         
          <header class="page-header">
            <div class="container-fluid">
            </div>
          </header>
          <br>
        <Body>
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header">
              <strong><center>ข้อมูลส่วนตัว</strong>
            </div>
            <div class="card-body">

          <table>
            <tr>
              <TH>1. ข้อมูลทั่วไป</TH>
            </tr>
            <tr>
              <td><b>ชื่อ - นานสกุล(ภาษาไทย) : </b><?php echo $student['Prefix'] ?> <?php echo $student['Student_NameTH'] ?> <?php echo $student['Student_LNameTH'] ?></td>
              <td><b>ชื่อเล่น : </b><?php echo $student['Student_Nickname'] ?> </td>
            </tr>
            <tr>
              <td><b>ชื่อ - นานสกุล(ภาษาอังกฤษ) : </b><?php echo $student['Student_NameEng'] ?> <?php echo $student['Student_LNameENG'] ?></td>
              <td><b>เบอร์โทร : </b><?php echo $student['Student_Phone'] ?></td>
            </tr>
              <tr>
              <td><b>รหัสนิสิต : </b><?php echo $student['Student_ID'] ?></td>
              <td><b>เลขบัตรประชาชน : </b><?php echo $student['Student_IdNum'] ?></td>
            </tr>
            <tr>
              <td><b>ชั้นปี : </b></td>
              <td><b>หลักสูตร : </b><?php echo $student['Course'] ?></td>
            </tr>
            <tr>
              <td><b>สาขาวิชา : </b></td>
              <td><b>จำนวนหน่วยกิตที่เรียน : </b></td>
            </tr>
            <tr>
              <td><b>GPAX : </b></td>
              <td><b>ระดับการศึกษา : </b><?php echo $student['Degree'] ?></td>
            </tr>
            <tr>
              <td><b>ชื่อปริญญา : </b><?php echo $student['Level'] ?></td>
              <td><b>กรุ๊ปเลือด : </b><?php echo $student['Blood'] ?></td>
            </tr>
            <tr>
              <td><b>วิทยาเขต : </b><?php echo $student['Campus'] ?></td>
              <td><b>ปีการศึกษาที่เข้า : </b><?php echo $student['Entry_Years'] ?></td>
            </tr>
            <tr>
              <td><b>สถานภาพ : </b><?php echo $status['Status_Name'] ?></td>
              <td><b>วิธีรับเข้า : </b><?php echo $student['Entry_Method'] ?></td>
            </tr>
            <tr>
              <td><b>วุฒิก่อนเข้ารับการศึกษา : </b><?php echo $student['HighesEd'] ?></td>
              <td><b>จบการศึกษาจาก : </b><?php echo $student['Gradfromschool'] ?></td>
            </tr>
            <tr>
              <td><b>สัญชาติ : </b><?php echo $student['Notionnality'] ?></td>
              <td><b>ศาสนา : </b><?php echo $student['Relidion'] ?></td>
            </tr>
            <tr>
              <td><b>ปี / เดือน / วัน (ที่เกิด) : </b><?php echo $student['Birthday'] ?></td>
              <td><b>อาจารย์ที่ปรึกษา : </b></td>
            </tr>
            <tr>
              <td><b>E-mail : </b><?php echo $student['Student_Email'] ?></td>
            </tr>
            <tr>
              <td><b>Facebook : </b><?php echo $student['Facebook'] ?></td>
              <td><b>Line : </b><?php echo $student['Line'] ?></td>
            </tr>
          </table>

          <table>
            <tr>
              <TH>2. ที่อยู่ตามทะเบียนบ้าน</TH>
            </tr>
            <tr>
              <td><b>บ้านเลขที่ : </b><?php echo $student['Homeaddress_Number'] ?></td>
              <td><b>หมู่ : </b><?php echo $student['Homeaddress_Moo'] ?></td>
              <td><b>ซอย : </b><?php echo $student['Homeaddress_Soi'] ?></td>
              <td><b>ตำบล / แขวง : </b><?php echo $student['Homeaddress_Tumbon'] ?></td>
              <td><b>เขต / อำเภอ : </b><?php echo $student['Homeaddress_Aumper'] ?></td>
            </tr>
            <tr>
              <td><b>จังหวัด : </b><?php echo $student['Homeaddress_Province'] ?></td>
              <td><b>รหัสไปรษณีย์ : </b><?php echo $student['Homeaddress_Postcode'] ?></td>
              <td><b>โทรศัพท์ : </b><?php echo $student['Student_Phone'] ?></td>
              <td><b>E-mail : </b><?php echo $student['Student_Email'] ?></td>
            </tr>
          </table>

          <table>
            <tr>
              <TH>3. ที่อยู่ที่สามารถติดต่อได้(ที่อยู่ปัจจุบัน)</TH>
            </tr>
            <tr>
              <td><b>บ้านเลขที่ : </b><?php echo $student['Address_Number'] ?></td>
              <td><b>หมู่ : </b><?php echo $student['Address_Moo'] ?></td>
              <td><b>ซอย : </b><?php echo $student['Address_Soi'] ?></td>
              <td><b>ตำบล / แขวง : </b><?php echo $student['Address_Tumbon'] ?></td>
              <td><b>เขต / อำเภอ : </b><?php echo $student['Address_Aumper'] ?></td>
            </tr>
            <tr>
              <td><b>จังหวัด : </b><?php echo $student['Address_Province'] ?></td>
              <td><b>รหัสไปรษณีย์ : </b><?php echo $student['Address_Postcode'] ?></td>
              <td><b>โทรศัพท์ : </b><?php echo $student['Address_Phone'] ?></td>
              <td><b>E-mail : </b><?php echo $student['Address_Email'] ?></td>
            </tr>
          </table>

          <table>
            <tr>
              <TH>4. ข้อมูลครอบครัว</TH>
            </tr>
            <tr>
              <td><b>ชื่อบิดา : </b><?php echo $student['Father_Name'] ?></td>
              <td><b>อาชีพ : </b><?php echo $student['Father_Career'] ?></td>
              <td><b>เบอร์โทร : </b><?php echo $student['Father_Phone'] ?></td>
              <td><b>สถานภาพ : </b><?php echo $student['Father_Status'] ?></td>
            </tr>
            <tr>
              <td><h5>ที่อยู่บิดา</h5></td>
            </tr>
            <tr>
              <td><b>บ้านเลขที่ : </b><?php echo $student['Fatheraddress_Number'] ?></td>
              <td><b>หมู่ : </b><?php echo $student['Fatheraddress_Moo'] ?></td>
              <td><b>ซอย : </b><?php echo $student['Fatheraddress_Soi'] ?></td>
              <td><b>ตำบล / แขวง : </b><?php echo $student['Fatheraddress_Tumbon'] ?></td>
              <td><b>เขต / อำเภอ : </b><?php echo $student['Fatheraddress_Aumper'] ?></td>
            </tr>
            <tr>
              <td><b>จังหวัด : </b><?php echo $student['Fatheraddress_Province'] ?></td>
              <td><b>รหัสไปรษณีย์ : </b><?php echo $student['Fatheraddress_Postcode'] ?></td>
              <td><b>E-mail : </b><?php echo $student['Father_Email'] ?></td>
            </tr>
            <tr>
              <td><b>ชื่อมารดา : </b><?php echo $student['Mother_Name'] ?></td>
              <td><b>อาชีพ : </b><?php echo $student['Mother_Career'] ?></td>
              <td><b>เบอร์โทร : </b><?php echo $student['Mother_Phone'] ?></td>
              <td><b>สถานภาพ : </b><?php echo $student['Mother_Status'] ?></td>
            </tr>
            <tr>
              <td><h5>ที่อยู่มารดา</h5></td>
            </tr>
            <tr>
              <td><b>บ้านเลขที่ : </b><?php echo $student['Motheraddress_Number'] ?></td>
              <td><b>หมู่ : </b><?php echo $student['Motheraddress_Moo'] ?></td>
              <td><b>ซอย : </b><?php echo $student['Motheraddress_Soi'] ?></td>
              <td><b>ตำบล / แขวง : </b><?php echo $student['Motheraddress_Tumbon'] ?></td>
              <td><b>เขต / อำเภอ : </b><?php echo $student['Motheraddress_Aumper'] ?></td>
            </tr>
            <tr>
              <td><b>จังหวัด : </b><?php echo $student['Motheraddress_Province'] ?></td>
              <td><b>รหัสไปรษณีย์ : </b><?php echo $student['Motheraddress_Postcode'] ?></td>
              <td><b>E-mail : </b><?php echo $student['Mother_Email'] ?></td>
            </tr>
          </table>

          <table>
            <tr>
              <TH>5. ข้อมูลผู้ปกครอง</TH>
            </tr>
            <tr>
              <td><b>ชื่อ  : </b><?php echo $student['Parent_Name'] ?></td>
              <td><b>ความสัมพันธ์  : </b><?php echo $student['Parent_Status'] ?></td>
            </tr>
            <tr>
              <td><b>บ้านเลขที่ : </b><?php echo $student['Parentaddress_Number'] ?></td>
              <td><b>หมู่ : </b><?php echo $student['Parentaddress_Moo'] ?></td>
              <td><b>ซอย : </b><?php echo $student['Parentaddress_Soi'] ?></td>
              <td><b>ตำบล / แขวง : </b><?php echo $student['Parentaddress_Tumbon'] ?></td>
              <td><b>เขต / อำเภอ : </b><?php echo $student['Parentaddress_Aumper'] ?></td>
            </tr>
            <tr>
              <td><b>จังหวัด : </b><?php echo $student['Parentaddress_Province'] ?></td>
              <td><b>รหัสไปรษณีย์ : </b><?php echo $student['Parentaddress_Postcode'] ?></td>
              <td><b>โทรศัพท์ : </b><?php echo $student['Parent_Phone'] ?></td>
              <td><b>E-mail : </b><?php echo $student['Parent_Email'] ?></td>
            </tr>
          </table>

          <table>
            <tr>
              <TH>6. ที่อยู่ของผู้ที่ติดต่อ</TH>
            </tr>
            <tr>
              <td><b>ชื่อ  : </b><?php echo $student['Contact_Name'] ?></td>
              <td><b>ความสัมพันธ์  : </b><?php echo $student['Contact_Status'] ?></td>
            </tr>
            <tr>
              <td><b>ที่อยู่ผู้ติดต่อได้ : </b><?php echo $student['Contactaddress_Number'] ?></td>
              <td><b>ตำบล / แขวง : </b><?php echo $student['Contactaddress_Tumbon'] ?></td>
              <td><b>เขต / อำเภอ : </b><?php echo $student['Contactaddress_Aumper'] ?></td>
              <td><b>จังหวัด : </b><?php echo $student['Contactaddress_Province'] ?></td>
            </tr>
            <tr>
              <td><b>รหัสไปรษณีย์ : </b><?php echo $student['Contactaddress_Postcode'] ?></td>
              <td><b>โทรศัพท์ : </b><?php echo $student['Contact_Phone'] ?></td>
              <td><b>E-mail : </b><?php echo $student['Contact_Email'] ?></td>
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
            <td><b>จำนวนเงิน(บาท) </b></td>
            <td><b>ชั่วโมง </b></td>

            </tr>

            <?php foreach ($scholarship as $student) { ?>

            <tr>
            <td><?php echo $student->Scholarship_Name ?></td>
            <td><?php echo $student->Scholarship_Giver ?></td>
            <td><?php echo $student->Scholarship_Amount ?></td>
            <td><?php echo $student->Scholarship_Date ?></td>
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
                  </div>
                </div>
              </div>
            </div>
          
        </Body>
        
  </body>
