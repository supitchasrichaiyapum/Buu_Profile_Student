
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
              <strong><center>ข้อมูลส่วนตัว</strong>
            </div>
            <div class="card-body">

          <table style="width:100%">
            <tr>
              <TH>1. ข้อมูลทั่วไป</TH>
            </tr>
            <tr>
              <td><b>ชื่อ - นานสกุล(ภาษาไทย) : </b><?php echo $student['MrMs'] ?> <?php echo $student['Student_NameTH'] ?> <?php echo $student['Student_LNameTH'] ?></td>
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
            </tr>
            <tr>
              <td><b>วิทยาเขต : </b><?php echo $student['Campus'] ?></td>
              <td><b>ปีการศึกษาที่เข้า : </b><?php echo $student['Entry_Years'] ?></td>
            </tr>
            <tr>
              <td><b>สถานภาพ : </b><?php echo $student['Status_ID'] ?></td>
              <td><b>วิธีรับเข้า : </b><?php echo $student['Entry_Method'] ?></td>
            </tr>
            <tr>
              <td><b>วุฒิก่อนเข้ารับการศึกษา : </b><?php echo $student['HighesEd'] ?></td>
              <td><b>จบการศึกษาจาก : </b><?php echo $student['GradFromSchool'] ?></td>
            </tr>
            <tr>
              <td><b>อาจารย์ที่ปรึกษา : </b></td>
            </tr>
            <tr>
              <td><b>E-mail : </b><?php echo $student['Address_Email'] ?></td>
            </tr>
            <tr>
              <td><b>Facebook : </b><?php echo $student['Facebook'] ?></td>
              <td><b>Line : </b><?php echo $student['Line'] ?></td>
            </tr>
          </table>

          <table style="width:100%">
            <tr>
              <TH>2. ที่อยู่ตามทะเบียนบ้าน</TH>
            </tr>
            <tr>
              <td><b>บ้านเลขที่ : </b><?php echo $student['Homeaddress_Number'] ?></td>
              <td><b>หมู่ : </b><?php echo $student['Homeaddress_Moo'] ?></td>
              <td><b>ซอย : </b><?php echo $student['Homeaddress_Soi'] ?></td>
              <td><b>ตำบล : </b><?php echo $student['Homeaddress_Tumbon'] ?></td>
              <td><b>เขต / อำเภอ : </b><?php echo $student['Homeaddress_Aumper'] ?></td>
            </tr>
            <tr>
              <td><b>จังหวัด : </b><?php echo $student['Homeaddress_Province'] ?></td>
              <td><b>รหัสไปรษณีย์ : </b><?php echo $student['Homeaddress_Postcode'] ?></td>
              <td><b>โทรศัพท์ : </b><?php echo $student['Homeaddress_Phone'] ?></td>
              <td><b>E-mail : </b><?php echo $student['Homeaddress_Email'] ?></td>
            </tr>
          </table>

          <table style="width:100%">
            <tr>
              <TH>3. ที่อยู่ที่สามารถติดต่อได้(ที่อยู่ปัจจุบัน)</TH>
            </tr>
            <tr>
              <TH>ที่อยู่หอพัก</TH>
            </tr>
            <tr>
              <td><b>หอพัก : </b><?php echo $student['Dormitory_Name'] ?></td>
              <td><b>ห้อง : </b><?php echo $student['Dormitory_Room'] ?></td>
              <td><b>โทรศัพท์ : </b><?php echo $student['Dormitory_Phone'] ?></td>
              <td><b>มือถือ : </b><?php echo $student['Dormitory_Mobile'] ?></td>
            </tr>
            <tr>
              <td><b>เลขที่หอ : </b><?php echo $student['Dormitory_Number'] ?></td>
              <td><b>หมู่ : </b><?php echo $student['Dormitory_Moo'] ?></td>
              <td><b>ซอย : </b><?php echo $student['Dormitory_Soi'] ?></td>
              <td><b>ตำบล : </b><?php echo $student['Dormitory_Tumbon'] ?></td>
              <td><b>เขต / อำเภอ : </b><?php echo $student['Dormitory_Aumper'] ?></td>
            </tr>
            <tr>
              <td><b>จังหวัด : </b><?php echo $student['Dormitory_Province'] ?></td>
              <td><b>รหัสไปรษณีย์ : </b><?php echo $student['Dormitory_Postcode'] ?></td>
            </tr>
            <tr>
              <TH>ที่อยู่บ้านพัก</TH>
            </tr>
            <tr>
              <td><b>บ้านเลขที่ : </b><?php echo $student['Address_Number'] ?></td>
              <td><b>หมู่ : </b><?php echo $student['Address_Moo'] ?></td>
              <td><b>ซอย : </b><?php echo $student['Address_Soi'] ?></td>
              <td><b>ตำบล : </b><?php echo $student['Address_Tumbon'] ?></td>
              <td><b>เขต / อำเภอ : </b><?php echo $student['Address_Aumper'] ?></td>
            </tr>
            <tr>
              <td><b>จังหวัด : </b><?php echo $student['Address_Province'] ?></td>
              <td><b>รหัสไปรษณีย์ : </b><?php echo $student['Address_Postcode'] ?></td>
              <td><b>โทรศัพท์ : </b><?php echo $student['Address_Phone'] ?></td>
              <td><b>E-mail : </b><?php echo $student['Address_Email'] ?></td>
            </tr>
          </table>

          <table style="width:100%">
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
              <td><b>ตำบล : </b><?php echo $student['Fatheraddress_Tumbon'] ?></td>
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
              <td><b>ตำบล : </b><?php echo $student['Motheraddress_Tumbon'] ?></td>
              <td><b>เขต / อำเภอ : </b><?php echo $student['Motheraddress_Aumper'] ?></td>
            </tr>
            <tr>
              <td><b>จังหวัด : </b><?php echo $student['Motheraddress_Province'] ?></td>
              <td><b>รหัสไปรษณีย์ : </b><?php echo $student['Motheraddress_Postcode'] ?></td>
              <td><b>E-mail : </b><?php echo $student['Mother_Email'] ?></td>
            </tr>
          </table>

          <table style="width:100%">
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
              <td><b>ตำบล : </b><?php echo $student['Parentaddress_Tumbon'] ?></td>
              <td><b>เขต / อำเภอ : </b><?php echo $student['Parentaddress_Aumper'] ?></td>
            </tr>
            <tr>
              <td><b>จังหวัด : </b><?php echo $student['Parentaddress_Province'] ?></td>
              <td><b>รหัสไปรษณีย์ : </b><?php echo $student['Parentaddress_Postcode'] ?></td>
              <td><b>โทรศัพท์ : </b><?php echo $student['Parent_Phone'] ?></td>
              <td><b>E-mail : </b><?php echo $student['Parent_Email'] ?></td>
            </tr>
          </table>

          <table style="width:100%">
            <tr>
              <TH>6. สถานภาพการรับทุน</TH>
            </tr>
            <tr>
              <td></td>
            </tr>
          </table>
                  </div>
                </div>
              </div>
            </div>
          
        </Body>
        
  </body>
