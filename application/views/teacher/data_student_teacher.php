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
              <strong><center>ข้อมูลนิสิต</strong>
            </div>
            <div class="card-body">

        <form  method="get"  action="data_student_teacher">
          <div class="container">
            <div class="row">
              <div class="col-md-6"><BR>
                <h2>การค้นหานิสิต</h2><BR>
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
          <?php
                if(count($result) == 0 && $student_code != '') {
                      echo "ไม่พบข้อมูล";
              } else if(count($result)) { ?>

                <form  method="get"  action="">
                <div align="right">
                <a href="editdata_student_admin"><button type="submit" class="btn btn-sm btn-primary"> แก้ไข </button></a>
                <a href="graduate_student_admin"><button type="submit" class="btn btn-sm btn-primary"> ผลการศึกษา </button></a>
                </div>
                

                <table style="width:100%">
                <tr>
                  <TH>1. ข้อมูลทั่วไป</TH>
                </tr>
                <tr>
                  <td><b>ชื่อ - นานสกุล(ภาษาไทย) : </b><?php echo $result[0]->MrMs." ".$result[0]->Student_NameTH." ".$result[0]->Student_LNameTH ?></td>
                  <td><b>ชื่อเล่น : </b><?php echo $result[0]->Student_Nickname ?> </td>
                </tr>
                <tr>
                  <td><b>ชื่อ - นานสกุล(ภาษาอังกฤษ) : </b><?php echo $result[0]->Student_NameEng ?> <?php echo $result[0]->Student_LNameENG ?></td>
                  <td><b>เบอร์โทร : </b><?php echo $result[0]->Student_Phone ?></td>
                </tr>
                  <tr>
                  <td><b>รหัสนิสิต : </b><?php echo $result[0]->Student_ID ?></td>
                  <td><b>เลขบัตรประชาชน : </b><?php echo $result[0]->Student_IdNum ?></td>
                </tr>
                <tr>
                  <td><b>ชั้นปี : </b></td>
                  <td><b>หลักสูตร : </b><?php echo $result[0]->Course ?></td>
                </tr>
                <tr>
                  <td><b>สาขาวิชา : </b></td>
                  <td><b>จำนวนหน่วยกิตที่เรียน : </b></td>
                </tr>
                <tr>
                  <td><b>GPAX : </b></td>
                  <td><b>ระดับการศึกษา : </b><?php echo $result[0]->Degree ?></td>
                </tr>
                <tr>
                  <td><b>ชื่อปริญญา : </b><?php echo $result[0]->Level ?></td>
                </tr>
                <tr>
                  <td><b>วิทยาเขต : </b><?php echo $result[0]->Campus ?></td>
                  <td><b>ปีการศึกษาที่เข้า : </b><?php echo $result[0]->Entry_Years ?></td>
                </tr>
                <tr>
                  <td><b>สถานภาพ : </b><?php echo $result[0]->Status_ID ?></td>
                  <td><b>วิธีรับเข้า : </b><?php echo $result[0]->Entry_Method ?></td>
                </tr>
                <tr>
                  <td><b>วุฒิก่อนเข้ารับการศึกษา : </b><?php echo $result[0]->HighesEd ?></td>
                  <td><b>จบการศึกษาจาก : </b><?php echo $result[0]->GradFromSchool ?></td>
                </tr>
                <tr>
                  <td><b>อาจารย์ที่ปรึกษา : </b></td>
                </tr>
                <tr>
                  <td><b>E-mail : </b><?php echo $result[0]->Address_Email ?></td>
                </tr>
                <tr>
                  <td><b>Facebook : </b><?php echo $result[0]->Facebook ?></td>
                  <td><b>Line : </b><?php echo $result[0]->Line ?></td>
                </tr>
              </table>
    
              <table style="width:100%">
                <tr>
                  <TH>2. ที่อยู่ตามทะเบียนบ้าน</TH>
                </tr>
                <tr>
                  <td><b>บ้านเลขที่ : </b><?php echo $result[0]->Homeaddress_Number ?></td>
                  <td><b>หมู่ : </b><?php echo $result[0]->Homeaddress_Moo ?></td>
                  <td><b>ซอย : </b><?php echo $result[0]->Homeaddress_Soi ?></td>
                  <td><b>ตำบล : </b><?php echo $result[0]->Homeaddress_Tumbon ?></td>
                  <td><b>เขต / อำเภอ : </b><?php echo $result[0]->Homeaddress_Aumper ?></td>
                </tr>
                <tr>
                  <td><b>จังหวัด : </b><?php echo $result[0]->Homeaddress_Province ?></td>
                  <td><b>รหัสไปรษณีย์ : </b><?php echo $result[0]->Homeaddress_Postcode ?></td>
                  <td><b>โทรศัพท์ : </b><?php echo $result[0]->Homeaddress_Phone ?></td>
                  <td><b>E-mail : </b><?php echo $result[0]->Homeaddress_Email ?></td>
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
                  <td><b>หอพัก : </b><?php echo $result[0]->Dormitory_Name ?></td>
                  <td><b>ห้อง : </b><?php echo $result[0]->Dormitory_Room ?></td>
                  <td><b>โทรศัพท์ : </b><?php echo $result[0]->Dormitory_Phone ?></td>
                  <td><b>มือถือ : </b><?php echo $result[0]->Dormitory_Mobile ?></td>
                </tr>
                <tr>
                  <td><b>เลขที่หอ : </b><?php echo $result[0]->Dormitory_Number ?></td>
                  <td><b>หมู่ : </b><?php echo $result[0]->Dormitory_Moo ?></td>
                  <td><b>ซอย : </b><?php echo $result[0]->Dormitory_Soi ?></td>
                  <td><b>ตำบล : </b><?php echo $result[0]->Dormitory_Tumbon ?></td>
                  <td><b>เขต / อำเภอ : </b><?php echo $result[0]->Dormitory_Aumper ?></td>
                </tr>
                <tr>
                  <td><b>จังหวัด : </b><?php echo $result[0]->Dormitory_Province ?></td>
                  <td><b>รหัสไปรษณีย์ : </b><?php echo $result[0]->Dormitory_Postcode ?></td>
                </tr>
                <tr>
                  <TH>ที่อยู่บ้านพัก</TH>
                </tr>
                <tr>
                  <td><b>บ้านเลขที่ : </b><?php echo $result[0]->Address_Number ?></td>
                  <td><b>หมู่ : </b><?php echo $result[0]->Address_Moo ?></td>
                  <td><b>ซอย : </b><?php echo $result[0]->Address_Soi ?></td>
                  <td><b>ตำบล : </b><?php echo $result[0]->Address_Tumbon ?></td>
                  <td><b>เขต / อำเภอ : </b><?php echo $result[0]->Address_Aumper ?></td>
                </tr>
                <tr>
                  <td><b>จังหวัด : </b><?php echo $result[0]->Address_Province ?></td>
                  <td><b>รหัสไปรษณีย์ : </b><?php echo $result[0]->Address_Postcode ?></td>
                  <td><b>โทรศัพท์ : </b><?php echo $result[0]->Address_Phone ?></td>
                  <td><b>E-mail : </b><?php echo $result[0]->Address_Email ?></td>
                </tr>
              </table>
    
              <table style="width:100%">
                <tr>
                  <TH>4. ข้อมูลครอบครัว</TH>
                </tr>
                <tr>
                  <td><b>ชื่อบิดา : </b><?php echo $result[0]->Father_Name ?></td>
                  <td><b>อาชีพ : </b><?php echo $result[0]->Father_Career ?></td>
                  <td><b>เบอร์โทร : </b><?php echo $result[0]->Father_Phone ?></td>
                  <td><b>สถานภาพ : </b><?php echo $result[0]->Father_Status ?></td>
                </tr>
                <tr>
                  <td><h5>ที่อยู่บิดา</h5></td>
                </tr>
                <tr>
                  <td><b>บ้านเลขที่ : </b><?php echo $result[0]->Fatheraddress_Number ?></td>
                  <td><b>หมู่ : </b><?php echo $result[0]->Fatheraddress_Moo ?></td>
                  <td><b>ซอย : </b><?php echo $result[0]->Fatheraddress_Soi ?></td>
                  <td><b>ตำบล : </b><?php echo $result[0]->Fatheraddress_Tumbon ?></td>
                  <td><b>เขต / อำเภอ : </b><?php echo $result[0]->Fatheraddress_Aumper ?></td>
                </tr>
                <tr>
                  <td><b>จังหวัด : </b><?php echo $result[0]->Fatheraddress_Province ?></td>
                  <td><b>รหัสไปรษณีย์ : </b><?php echo $result[0]->Fatheraddress_Postcode ?></td>
                  <td><b>E-mail : </b><?php echo $result[0]->Father_Email ?></td>
                </tr>
                <tr>
                  <td><b>ชื่อมารดา : </b><?php echo $result[0]->Mother_Name ?></td>
                  <td><b>อาชีพ : </b><?php echo $result[0]->Mother_Career ?></td>
                  <td><b>เบอร์โทร : </b><?php echo $result[0]->Mother_Phone ?></td>
                  <td><b>สถานภาพ : </b><?php echo $result[0]->Mother_Status ?></td>
                </tr>
                <tr>
                  <td><h5>ที่อยู่มารดา</h5></td>
                </tr>
                <tr>
                  <td><b>บ้านเลขที่ : </b><?php echo $result[0]->Motheraddress_Number ?></td>
                  <td><b>หมู่ : </b><?php echo $result[0]->Motheraddress_Moo ?></td>
                  <td><b>ซอย : </b><?php echo $result[0]->Motheraddress_Soi ?></td>
                  <td><b>ตำบล : </b><?php echo $result[0]->Motheraddress_Tumbon ?></td>
                  <td><b>เขต / อำเภอ : </b><?php echo $result[0]->Motheraddress_Aumper ?></td>
                </tr>
                <tr>
                  <td><b>จังหวัด : </b><?php echo $result[0]->Motheraddress_Province ?></td>
                  <td><b>รหัสไปรษณีย์ : </b><?php echo $result[0]->Motheraddress_Postcode ?></td>
                  <td><b>E-mail : </b><?php echo $result[0]->Mother_Email ?></td>
                </tr>
              </table>
    
              <table style="width:100%">
                <tr>
                  <TH>5. ข้อมูลผู้ปกครอง</TH>
                </tr>
                <tr>
                  <td><b>ชื่อ  : </b><?php echo $result[0]->Parent_Name ?></td>
                  <td><b>ความสัมพันธ์  : </b><?php echo $result[0]->Parent_Status ?></td>
                </tr>
                <tr>
                  <td><b>บ้านเลขที่ : </b><?php echo $result[0]->Parentaddress_Number ?></td>
                  <td><b>หมู่ : </b><?php echo $result[0]->Parentaddress_Moo ?></td>
                  <td><b>ซอย : </b><?php echo $result[0]->Parentaddress_Soi ?></td>
                  <td><b>ตำบล : </b><?php echo $result[0]->Parentaddress_Tumbon ?></td>
                  <td><b>เขต / อำเภอ : </b><?php echo $result[0]->Parentaddress_Aumper ?></td>
                </tr>
                <tr>
                  <td><b>จังหวัด : </b><?php echo $result[0]->Parentaddress_Province ?></td>
                  <td><b>รหัสไปรษณีย์ : </b><?php echo $result[0]->Parentaddress_Postcode ?></td>
                  <td><b>โทรศัพท์ : </b><?php echo $result[0]->Parent_Phone ?></td>
                  <td><b>E-mail : </b><?php echo $result[0]->Parent_Email ?></td>
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

          <?php } ?>
          </table>
          </form> <br>
</Body>
