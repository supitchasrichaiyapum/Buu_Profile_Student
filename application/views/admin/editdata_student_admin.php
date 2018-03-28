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
              <br><label for="Student_NameEng">ชื่อ(ภาษาอังกฤษ)</label>
              <input type="text" class="form-control" id="Student_NameEng" name="Student_NameEng" value="<?php echo $result['Student_NameEng'] ?>">
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <br><label for="Student_LNameENG">นามสกุล(ภาษาอังกฤษ)</label>
              <input type="text" class="form-control" id="Student_LNameENG" name="Student_LNameENG" value="<?php echo $result['Student_LNameENG'] ?>">
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
              <br><label for="Fatheraddress_Number">บ้านเลขที่</label>
              <input type="text" class="form-control" id="Fatheraddress_Number" name="Fatheraddress_Number" value="<?php echo $result['Fatheraddress_Number'] ?>">
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <br><label for="Fatheraddress_Moo">หมู่</label>
              <input type="text" class="form-control" id="Fatheraddress_Moo" name="Fatheraddress_Moo" value="<?php echo $result['Fatheraddress_Moo'] ?>">
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <br><label for="Fatheraddress_Soi">ซอย</label>
              <input type="text" class="form-control" id="Fatheraddress_Soi" name="Fatheraddress_Soi" value="<?php echo $result['Fatheraddress_Soi'] ?>">
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <br><label for="Fatheraddress_Tumbon">ตำบล</label>
              <input type="text" class="form-control" id="Fatheraddress_Tumbon" name="Fatheraddress_Tumbon" value="<?php echo $result['Fatheraddress_Tumbon'] ?>">
            </div>
          </div>
        </div>    
          <div class="row">
          <div class="col-sm-3">
            <div class="form-group">
              <br><label for="Fatheraddress_Aumper">เขต/อำเภอ</label>
              <input type="text" class="form-control" id="Fatheraddress_Aumper" name="Fatheraddress_Aumper" value="<?php echo $result['Fatheraddress_Aumper'] ?>">
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <br><label for="Fatheraddress_Province">จังหวัด</label>
              <input type="text" class="form-control" id="Fatheraddress_Province" name="Fatheraddress_Province" value="<?php echo $result['Fatheraddress_Province'] ?>">
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <br><label for="Fatheraddress_Postcode">รหัสไปรษณีย์</label>
              <input type="text" class="form-control" id="Fatheraddress_Postcode" name="Fatheraddress_Postcode" value="<?php echo $result['Fatheraddress_Postcode'] ?>">
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
              <br><label for="Motheraddress_Number">บ้านเลขที่</label>
              <input type="text" class="form-control" id="Motheraddress_Number" name="Motheraddress_Number" value="<?php echo $result['Motheraddress_Number'] ?>">
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <br><label for="Motheraddress_Moo">หมู่</label>
              <input type="text" class="form-control" id="Motheraddress_Moo" name="Motheraddress_Moo" value="<?php echo $result['Motheraddress_Moo'] ?>">
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <br><label for="Motheraddress_Soi">ซอย</label>
              <input type="text" class="form-control" id="Motheraddress_Soi" name="Motheraddress_Soi" value="<?php echo $result['Motheraddress_Soi'] ?>">
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <br><label for="Motheraddress_Tumbon">ตำบล</label>
              <input type="text" class="form-control" id="Motheraddress_Tumbon" name="Motheraddress_Tumbon" value="<?php echo $result['Motheraddress_Tumbon'] ?>">
            </div>
          </div>
        </div>    
          <div class="row">
          <div class="col-sm-3">
            <div class="form-group">
              <br><label for="Motheraddress_Aumper">เขต/อำเภอ</label>
              <input type="text" class="form-control" id="Motheraddress_Aumper" name="Motheraddress_Aumper" value="<?php echo $result['Motheraddress_Aumper'] ?>">
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <br><label for="Motheraddress_Province">จังหวัด</label>
              <input type="text" class="form-control" id="Motheraddress_Province" name="Motheraddress_Province" value="<?php echo $result['Motheraddress_Province'] ?>">
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <br><label for="Motheraddress_Postcode">รหัสไปรษณีย์</label>
              <input type="text" class="form-control" id="Motheraddress_Postcode" name="Motheraddress_Postcode" value="<?php echo $result['Motheraddress_Postcode'] ?>">
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
              <br><label for="Parentaddress_Number">บ้านเลขที่</label>
              <input type="text" class="form-control" id="Parentaddress_Number" name="Parentaddress_Number" value="<?php echo $result['Parentaddress_Number'] ?>">
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <br><label for="Parentaddress_Moo">หมู่</label>
              <input type="text" class="form-control" id="Parentaddress_Moo" name="Parentaddress_Moo" value="<?php echo $result['Parentaddress_Moo'] ?>">
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <br><label for="Parentaddress_Soi">ซอย</label>
              <input type="text" class="form-control" id="Parentaddress_Soi" name="Parentaddress_Soi" value="<?php echo $result['Parentaddress_Soi'] ?>">
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <br><label for="Parentaddress_Tumbon">ตำบล</label>
              <input type="text" class="form-control" id="Parentaddress_Tumbon" name="Parentaddress_Tumbon" value="<?php echo $result['Parentaddress_Tumbon'] ?>">
            </div>
          </div>
        </div>    
          <div class="row">
          <div class="col-sm-3">
            <div class="form-group">
              <br><label for="Parentaddress_Aumper">เขต/อำเภอ</label>
              <input type="text" class="form-control" id="Parentaddress_Aumper" name="Parentaddress_Aumper" value="<?php echo $result['Parentaddress_Aumper'] ?>">
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <br><label for="Parentaddress_Province">จังหวัด</label>
              <input type="text" class="form-control" id="Parentaddress_Province" name="Parentaddress_Province" value="<?php echo $result['Parentaddress_Province'] ?>">
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <br><label for="Parentaddress_Postcode">รหัสไปรษณีย์</label>
              <input type="text" class="form-control" id="Parentaddress_Postcode" name="Parentaddress_Postcode" value="<?php echo $result['Parentaddress_Postcode'] ?>">
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
