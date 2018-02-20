<style>
table {
    width:100%;
}
th, td {
    padding: 5px;
    text-align: left;
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

        <form  method="get"  action="editaward_student_admin">
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
        <div align="right">
        <a href="editdata_student_admin"><button type="submit" class="btn btn-sm btn-primary"> แก้ไข </button></a>
        <a href="transcipt_student_admin"><button type="submit" class="btn btn-sm btn-primary"> ผลการศึกษา </button></a>
        </div>
        <BR> <BR>
        <table style="width:100%">
            <tr>
              <TH>1. ข้อมูลทั่วไป</TH>
            </tr>
            <tr>
              <td>ชื่อ - นานสกุล(ภาษาไทย)</td>
              <td>ชื่อเล่น</td>
            </tr>
            <tr>
              <td>ชื่อ - นานสกุล(ภาษาอังกฤษ)</td>
              <td>เบอร์โทร</td>
            </tr>
              <tr>
              <td>รหัสนิสิต</td>
              <td>เลขบัตรประชาชน</td>
            </tr>
            <tr>
              <td>ชั้นปี</td>
              <td>หลักสูตร</td>
            </tr>
            <tr>
              <td>สาขาวิชา</td>
              <td>จำนวนหน่วยกิตที่เรียน</td>
            </tr>
            <tr>
              <td>GPAX</td>
              <td>ระดับการศึกษา</td>
            </tr>
            <tr>
              <td>ชื่อปริญญา</td>
            </tr>
            <tr>
              <td>วิทยาเขต</td>
              <td>ปีการศึกษาที่เข้า</td>
            </tr>
            <tr>
              <td>สถานภาพ</td>
              <td>วิธีรับเข้า</td>
            </tr>
            <tr>
              <td>วุฒิก่อนเข้ารับการศึกษา</td>
              <td>จบการศึกษาจาก</td>
            </tr>
            <tr>
              <td>อาจารย์ที่ปรึกษา</td>
            </tr>
            <tr>
              <td>E-mail</td>
            </tr>
            <tr>
              <td>Facebook</td>
              <td>Line</td>
            </tr>
          </table>

          <table style="width:100%">
            <tr>
              <TH>2. ที่อยู่ตามทะเบียนบ้าน</TH>
            </tr>
            <tr>
              <td>บ้านเลขที่</td>
              <td>หมู่</td>
              <td>ซอย</td>
              <td>ตำบล</td>
              <td>เขต / อำเภอ</td>
            </tr>
            <tr>
              <td>จังหวัด</td>
              <td>รหัสไปรษณีย์</td>
              <td>โทรศัพท์</td>
              <td>E-mail</td>
            </tr>
          </table>

          <table style="width:100%">
            <tr>
              <TH>3. ที่อยู่ปัจจุบัน</TH>
            </tr>
            <tr>
              <td>หอพัก</td>
              <td>ห้อง</td>
              <td>โทรศัพท์</td>
              <td>มือถือ</td>
            </tr>
            <tr>
              <td>บ้านเลขที่</td>
              <td>หมู่</td>
              <td>ซอย</td>
              <td>ตำบล</td>
              <td>เขต / อำเภอ</td>
            </tr>
            <tr>
              <td>จังหวัด</td>
              <td>รหัสไปรษณีย์</td>
              <td>โทรศัพท์</td>
              <td>E-mail</td>
            </tr>
          </table>

          <table style="width:100%">
            <tr>
              <TH>4. ข้อมูลครอบครัว</TH>
            </tr>
            <tr>
              <td>ชื่อบิดา</td>
              <td>อาชีพ</td>
              <td>เบอร์โทร</td>
              <td>สถานภาพ</td>
            </tr>
            <tr>
              <td><h5>ที่อยู่บิดา</h5></td>
            </tr>
            <tr>
              <td>บ้านเลขที่</td>
              <td>หมู่</td>
              <td>ซอย</td>
              <td>ตำบล</td>
              <td>เขต / อำเภอ</td>
            </tr>
            <tr>
              <td>จังหวัด</td>
              <td>รหัสไปรษณีย์</td>
              <td>โทรศัพท์</td>
              <td>E-mail</td>
            </tr>
            <tr>
              <td>ชื่อมารดา</td>
              <td>อาชีพ</td>
              <td>เบอร์โทร</td>
              <td>สถานภาพ</td>
            </tr>
            <tr>
              <td><h5>ที่อยู่มารดา</h5></td>
            </tr>
            <tr>
              <td>บ้านเลขที่</td>
              <td>หมู่</td>
              <td>ซอย</td>
              <td>ตำบล</td>
              <td>เขต / อำเภอ</td>
            </tr>
            <tr>
              <td>จังหวัด</td>
              <td>รหัสไปรษณีย์</td>
              <td>โทรศัพท์</td>
              <td>E-mail</td>
            </tr>
          </table>

          <table style="width:100%">
            <tr>
              <TH>5. ข้อมูลผู้ปกครอง</TH>
            </tr>
            <tr>
              <td>ชื่อ</td>
              <td>ความสัมพันธ์</td>
            </tr>
            <tr>
              <td>บ้านเลขที่</td>
              <td>หมู่</td>
              <td>ซอย</td>
              <td>ตำบล</td>
              <td>เขต / อำเภอ</td>
            </tr>
            <tr>
              <td>จังหวัด</td>
              <td>รหัสไปรษณีย์</td>
              <td>โทรศัพท์</td>
              <td>E-mail</td>
            </tr>
          </table>

          <table style="width:100%">
            <tr>
              <TH></TH>
            </tr>
           
          </table>

          <table style="width:100%">
            <tr>
              <TH>6. นิสิตเลือกว่าจะทำโปรเจคหรือสหกิจ</TH>
            </tr>
          </table> <br>
</Body>
