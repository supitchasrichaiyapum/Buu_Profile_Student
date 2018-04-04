<body>
<div class="content-inner">
  <header class="page-header">
    <div class="container-fluid">      
    </div>
  </header>
  <br>
<Body>

<div class="col-sm-12">
<form action="<?php echo site_url("admin/c_admin/post_edit_student_admin/".$result['Student_ID']); ?>" method="post" onsubmit="return confirm('ยืนยันการบันทึกหรือไม่ ?');">
    <div class="card">
      <div class="card-header">
      <strong><center>แก้ไขข้อมูลส่วนตัว</strong>
      </div>
      <div class="card-body">
        <B>1. ข้อมูลทั่วไป</B><br>
        <div class="row">

        <div class="col-sm-4">
            <div class="form-group">
              <br><label for="Student_Name_Eng">ชื่อ(ภาษาอังกฤษ)</label>
              <input type="text" class="form-control" id="Student_Name_Eng" name="Student_Name_Eng" value="<?php echo $result['Student_Name_Eng'] ?>">
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <br><label for="Student_Lname_Eng">นามสกุล(ภาษาอังกฤษ)</label>
              <input type="text" class="form-control" id="Student_Lname_Eng" name="Student_Lname_Eng" value="<?php echo $result['Student_Lname_Eng'] ?>">
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <br><label for="Student_Nickname">ชื่อเล่น</label>
              <input type="text" class="form-control" id="Student_Nickname" name="Student_Nickname" value="<?php echo $result['Student_Nickname'] ?>">
            </div>
          </div>
        </div>               
        <div class="row"> 
          <div class="col-sm-4">
            <div class="form-group">
              <br><label for="Student_Phone">เบอร์โทรศัพท์</label>
              <input type="text" class="form-control" id="Student_Phone" name="Student_Phone" value="<?php echo $result['Student_Phone'] ?>">
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <br><label for="Student_Email">E-Mail</label>
              <input type="text" class="form-control" id="Student_Email" name="Student_Email" value="<?php echo $result['Student_Email'] ?>">
            </div>
          </div>
          <div class="form-group col-sm-4">
            <br><label for="Blood">หมู่เลือด</label>
              <select class="form-control" id="Blood">
                <option>A</option>
                <option>B</option>
                <option>O</option>
                <option>AB</option>
                <option>ไม่ระบุ</option>
              </select>
          </div> 
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="form-group">
              <br><label for="Facebook">Facebook</label>
              <input type="text" class="form-control" id="Facebook" name="Facebook" value="<?php echo $result['Facebook'] ?>">
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <br><label for="Line">Line</label>
              <input type="text" class="form-control" id="Line" name="Line" value="<?php echo $result['Line'] ?>">
            </div>
          </div>
        </div><br>
        <B>2. ที่อยู่ปัจจุบัน</B><br>              
        <div class="row">
          <div class="col-sm-3">
            <div class="form-group">
            <br><label for="Address_Number">บ้านเลขที่</label>
              <input type="text" class="form-control" id="Address_Number" name="Address_Number" value="<?php echo $result['Address_Number'] ?>">
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <br><label for="Address_Moo">หมู่</label>
              <input type="text" class="form-control" id="Address_Moo" name="Address_Moo" value="<?php echo $result['Address_Moo'] ?>">
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <br><label for="Address_Soi">ซอย</label>
              <input type="text" class="form-control" id="Address_Soi" name="Address_Soi" value="<?php echo $result['Address_Soi'] ?>">
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <br><label for="Address_Tumbon">ตำบล</label>
              <input type="text" class="form-control" id="Address_Tumbon" name="Address_Tumbon" value="<?php echo $result['Address_Tumbon'] ?>">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-3">
            <div class="form-group">
              <br><label for="Address_Aumper">เขต/อำเภอ</label>
              <input type="text" class="form-control" id="Address_Aumper" name="Address_Aumper" value="<?php echo $result['Address_Aumper'] ?>">
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <br><label for="Address_Province">จังหวัด</label>
              <input type="text" class="form-control" id="Address_Province" name="Address_Province" value="<?php echo $result['Address_Province'] ?>">
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <br><label for="Address_Postcode">รหัสไปรษณีย์</label>
              <input type="text" class="form-control" id="Address_Postcode" name="Address_Postcode" value="<?php echo $result['Address_Postcode'] ?>">
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <br><label for="Address_Phone">โทรศัพท์</label>
              <input type="text" class="form-control" id="Address_Phone" name="Address_Phone" value="<?php echo $result['Address_Phone'] ?>">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="form-group">
              <br><label for="Address_Email">E-Mail</label>
              <input type="text" class="form-control" id="Address_Email" name="Address_Email" value="<?php echo $result['Address_Email'] ?>">
            </div>
          </div>
        </div><BR>              
        <B>4. ข้อมูลครอบครัว</B>
        <br><br>
        <B>ข้อมูลบิดา</B>
       <div class="row">
            <div class="col-sm-4">
              <div class="form-group">
                <br><label for="Father_Name">ชื่อบิดา</label>
                <input type="text" class="form-control" id="Father_Name" name="Father_Name" value="<?php echo $result['Father_Name'] ?>">
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group">
              <br><label for="Father_Career">อาชีพ</label>
                <input type="text" class="form-control" id="Father_Career" name="Father_Career" value="<?php echo $result['Father_Career'] ?>">
              </div>
            </div>
            <div class="form-group col-sm-4">
            <br><label for="Father_status">สถานภาพ</label>
              <select class="form-control" id="Father_status">
                <option>อยู่ด้วยกัน</option>
                <option>แยกกันอยู่</option>
                <option>หย่าร้าง</option>
                <option>ถึงแก่กรรม</option>
              </select>
          </div>  
        </div> 
        <div class="row">
          <div class="col-sm-3">
            <div class="form-group">
              <br><label for="Father_Address_Number">บ้านเลขที่</label>
              <input type="text" class="form-control" id="Father_Address_Number" name="Father_Address_Number" value="<?php echo $result['Father_Address_Number'] ?>">
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <br><label for="Father_Address_Moo">หมู่</label>
              <input type="text" class="form-control" id="Father_Address_Moo" name="Father_Address_Moo" value="<?php echo $result['Father_Address_Moo'] ?>">
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <br><label for="Father_Address_Soi">ซอย</label>
              <input type="text" class="form-control" id="Father_Address_Soi" name="Father_Address_Soi" value="<?php echo $result['Father_Address_Soi'] ?>">
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <br><label for="Father_Address_Tumbon">ตำบล</label>
              <input type="text" class="form-control" id="Father_Address_Tumbon" name="Father_Address_Tumbon" value="<?php echo $result['Father_Address_Tumbon'] ?>">
            </div>
          </div>
        </div>    
          <div class="row">
          <div class="col-sm-3">
            <div class="form-group">
              <br><label for="Father_Address_Aumper">เขต/อำเภอ</label>
              <input type="text" class="form-control" id="Father_Address_Aumper" name="Father_Address_Aumper" value="<?php echo $result['Father_Address_Aumper'] ?>">
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <br><label for="Father_Address_Province">จังหวัด</label>
              <input type="text" class="form-control" id="Father_Address_Province" name="Father_Address_Province" value="<?php echo $result['Father_Address_Province'] ?>">
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <br><label for="Father_Address_Postcode">รหัสไปรษณีย์</label>
              <input type="text" class="form-control" id="Father_Address_Postcode" name="Father_Address_Postcode" value="<?php echo $result['Father_Address_Postcode'] ?>">
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <br><label for="Father_Phone">โทรศัพท์</label>
              <input type="text" class="form-control" id="Father_Phone" name="Father_Phone" value="<?php echo $result['Father_Phone'] ?>">
            </div>
          </div>
        </div>             
        <div class="row">
          <div class="col-sm-4">
            <div class="form-group">
              <br><label for="Father_Email">E-Mail</label>
              <input type="text" class="form-control" id="Father_Email" name="Father_Email" value="<?php echo $result['Father_Email'] ?>">
            </div>
          </div>
        </div>
        <B>ข้อมูลมารดา</B>
        <div class="row">
            <div class="col-sm-4">
              <div class="form-group">
                <br><label for="Mother_Name">ชื่อมารดา</label>
                <input type="text" class="form-control" id="Mother_Name" name="Mother_Name" value="<?php echo $result['Mother_Name'] ?>">
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group">
              <br><label for="Mother_Career">อาชีพ</label>
                <input type="text" class="form-control" id="Mother_Career" name="Mother_Career" value="<?php echo $result['Mother_Career'] ?>">
              </div>
            </div>
            <div class="form-group col-sm-4">
            <br><label for="Mother_status">สถานภาพ</label>
              <select class="form-control" id="Mother_status">
                <option>อยู่ด้วยกัน</option>
                <option>แยกกันอยู่</option>
                <option>หย่าร้าง</option>
                <option>ถึงแก่กรรม</option>
              </select>
          </div>  
        </div> 
        <div class="row">
          <div class="col-sm-3">
            <div class="form-group">
              <br><label for="Mother_Address_Number">บ้านเลขที่</label>
              <input type="text" class="form-control" id="Mother_Address_Number" name="Mother_Address_Number" value="<?php echo $result['Mother_Address_Number'] ?>">
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <br><label for="Mother_Address_Moo">หมู่</label>
              <input type="text" class="form-control" id="Mother_Address_Moo" name="Mother_Address_Moo" value="<?php echo $result['Mother_Address_Moo'] ?>">
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <br><label for="Mother_Address_Soi">ซอย</label>
              <input type="text" class="form-control" id="Mother_Address_Soi" name="Mother_Address_Soi" value="<?php echo $result['Mother_Address_Soi'] ?>">
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <br><label for="Mother_Address_Tumbon">ตำบล</label>
              <input type="text" class="form-control" id="Mother_Address_Tumbon" name="Mother_Address_Tumbon" value="<?php echo $result['Mother_Address_Tumbon'] ?>">
            </div>
          </div>
        </div>    
          <div class="row">
          <div class="col-sm-3">
            <div class="form-group">
              <br><label for="Mother_Address_Aumper">เขต/อำเภอ</label>
              <input type="text" class="form-control" id="Mother_Address_Aumper" name="Mother_Address_Aumper" value="<?php echo $result['Mother_Address_Aumper'] ?>">
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <br><label for="Mother_Address_Province">จังหวัด</label>
              <input type="text" class="form-control" id="Mother_Address_Province" name="Mother_Address_Province" value="<?php echo $result['Mother_Address_Province'] ?>">
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <br><label for="Mother_Address_Postcode">รหัสไปรษณีย์</label>
              <input type="text" class="form-control" id="Mother_Address_Postcode" name="Mother_Address_Postcode" value="<?php echo $result['Mother_Address_Postcode'] ?>">
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <br><label for="Mother_Phone">โทรศัพท์</label>
              <input type="text" class="form-control" id="Mother_Phone" name="Mother_Phone" value="<?php echo $result['Mother_Phone'] ?>">
            </div>
          </div>
        </div>             
        <div class="row">
          <div class="col-sm-4">
            <div class="form-group">
              <br><label for="Mother_Email">E-Mail</label>
              <input type="text" class="form-control" id="Mother_Email" name="Mother_Email" value="<?php echo $result['Mother_Email'] ?>">
            </div>
          </div>
        </div><br>
        <B>5. ข้อมูลผู้ปกครอง</B><br>
          <div class="row">
            <div class="col-sm-4">
              <div class="form-group">
                <br><label for="Parent_Name">ชื่อ</label>
                <input type="text" class="form-control" id="Parent_Name" name="Parent_Name" value="<?php echo $result['Parent_Name'] ?>">
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group">
              <br><label for="Parent_Career">อาชีพ</label>
                <input type="text" class="form-control" id="Parent_Career" name="Parent_Career" value="<?php echo $result['Parent_Career'] ?>">
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group">
              <br><label for="Parent_Status">ความสัมพันธ์</label>
                <input type="text" class="form-control" id="Parent_Status" name="Parent_Status" value="<?php echo $result['Parent_Status'] ?>">
              </div>
            </div>
            
          </div>
          <div class="row">
          <div class="col-sm-3">
            <div class="form-group">
              <br><label for="Parent_Address_Number">บ้านเลขที่</label>
              <input type="text" class="form-control" id="Parent_Address_Number" name="Parent_Address_Number" value="<?php echo $result['Parent_Address_Number'] ?>">
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <br><label for="Parent_Address_Moo">หมู่</label>
              <input type="text" class="form-control" id="Parent_Address_Moo" name="Parent_Address_Moo" value="<?php echo $result['Parent_Address_Moo'] ?>">
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <br><label for="Parent_Address_Soi">ซอย</label>
              <input type="text" class="form-control" id="Parent_Address_Soi" name="Parent_Address_Soi" value="<?php echo $result['Parent_Address_Soi'] ?>">
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <br><label for="Parent_Address_Tumbon">ตำบล</label>
              <input type="text" class="form-control" id="Parent_Address_Tumbon" name="Parent_Address_Tumbon" value="<?php echo $result['Parent_Address_Tumbon'] ?>">
            </div>
          </div>
        </div>    
          <div class="row">
          <div class="col-sm-3">
            <div class="form-group">
              <br><label for="Parent_Address_Aumper">เขต/อำเภอ</label>
              <input type="text" class="form-control" id="Parent_Address_Aumper" name="Parent_Address_Aumper" value="<?php echo $result['Parent_Address_Aumper'] ?>">
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <br><label for="Parent_Address_Province">จังหวัด</label>
              <input type="text" class="form-control" id="Parent_Address_Province" name="Parent_Address_Province" value="<?php echo $result['Parent_Address_Province'] ?>">
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <br><label for="Parent_Address_Postcode">รหัสไปรษณีย์</label>
              <input type="text" class="form-control" id="Parent_Address_Postcode" name="Parent_Address_Postcode" value="<?php echo $result['Parent_Address_Postcode'] ?>">
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <br><label for="Parent_Phone">โทรศัพท์</label>
              <input type="text" class="form-control" id="Parent_Phone" name="Parent_Phone" value="<?php echo $result['Parent_Phone'] ?>">
            </div>
          </div>
        </div>             
        <div class="row">
          <div class="col-sm-4">
            <div class="form-group">
              <br><label for="Parent_Email">E-Mail</label>
              <input type="text" class="form-control" id="Parent_Email" name="Parent_Email" value="<?php echo $result['Parent_Email'] ?>">
            </div>
          </div>
        </div><br>
        
  <button type="submit" class="btn btn-primary">บันทึก</button>
  
  </form>
      </div>
    </div>            
  </div>
</Body>   
</body>
