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

        <form action="<?php echo site_url("student/c_student/post_edit_student/".$student['Student_ID']); ?>" method="post" onsubmit="return confirm('ยืนยันการบันทึกหรือไม่ ?');">
        <?php echo validation_errors('<div class="alert alert-danger" role="alert">', '</div>'); ?>  

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
                      <input type="text" class="form-control" id="Student_NameEng" name="Student_NameEng" value="<?php echo $student['Student_NameEng'] ?>">
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <br><label for="Student_LNameENG">นามสกุล(ภาษาอังกฤษ)</label>
                      <input type="text" class="form-control" id="Student_LNameENG" name="Student_LNameENG" value="<?php echo $student['Student_LNameENG'] ?>">
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <br><label for="Student_Nickname">ชื่อเล่น</label>
                      <input type="text" class="form-control" id="Student_Nickname" name="Student_Nickname" value="<?php echo $student['Student_Nickname'] ?>">
                    </div>
                  </div>
                </div>               
                <div class="row"> 
                  <div class="col-sm-4">
                    <div class="form-group">
                      <br><label for="Student_Phone">เบอร์โทรศัพท์</label>
                      <input type="text" class="form-control" id="Student_Phone" name="Student_Phone" value="<?php echo $student['Student_Phone'] ?>">
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <br><label for="Student_Email">E-Mail</label>
                      <input type="text" class="form-control" id="Student_Email" name="Student_Email" value="<?php echo $student['Student_Email'] ?>">
                    </div>
                  </div>
                  <div class="form-group col-sm-4">
                    <br><label for="Blood">หมู่เลือด</label>
                      <select class="form-control" id="Blood" name="Blood">
                      <?php foreach(get_bloods() as $key => $blood){
                        if($student['Blood'] == $key){
                          echo '<option value="'.$key.'" selected>'.$blood.'</option>';
                        } else {
                          echo '<option value="'.$key.'">'.$blood.'</option>';
                        }
                      } ?>
                      </select>
                  </div> 
                </div>
                <div class="row">
                  
                <div class="col-sm-4">
                    <div class="form-group">
                      <br><label for="Teacher_ID">อาจารย์ที่ปรึกษา</label>
                      <input type="text" class="form-control" id="Teacher_ID" name="Teacher_ID" value="<?php echo $student['Teacher_ID'] ?>">
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <br><label for="Facebook">Facebook</label>
                      <input type="text" class="form-control" id="Facebook" name="Facebook" value="<?php echo $student['Facebook'] ?>">
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <br><label for="Line">Line</label>
                      <input type="text" class="form-control" id="Line" name="Line" value="<?php echo $student['Line'] ?>">
                    </div>
                  </div>

                </div><br>

                <B>2. ที่อยู่ปัจจุบัน</B><br>              
                <div class="row">
                  <div class="col-sm-3">
                    <div class="form-group">
                    <br><label for="Address_Number">บ้านเลขที่</label>
                      <input type="text" class="form-control" id="Address_Number" name="Address_Number" value="<?php echo $student['Address_Number'] ?>">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <br><label for="Address_Moo">หมู่</label>
                      <input type="text" class="form-control" id="Address_Moo" name="Address_Moo" value="<?php echo $student['Address_Moo'] ?>">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <br><label for="Address_Soi">ซอย</label>
                      <input type="text" class="form-control" id="Address_Soi" name="Address_Soi" value="<?php echo $student['Address_Soi'] ?>">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <br><label for="Address_Tumbon">ตำบล / แขวง</label>
                      <input type="text" class="form-control" id="Address_Tumbon" name="Address_Tumbon" value="<?php echo $student['Address_Tumbon'] ?>">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-3">
                    <div class="form-group">
                      <br><label for="Address_Aumper">อำเภอ / เขต</label>
                      <input type="text" class="form-control" id="Address_Aumper" name="Address_Aumper" value="<?php echo $student['Address_Aumper'] ?>">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <br><label for="Address_Province">จังหวัด</label>
                      <input type="text" class="form-control" id="Address_Province" name="Address_Province" value="<?php echo $student['Address_Province'] ?>">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <br><label for="Address_Postcode">รหัสไปรษณีย์</label>
                      <input type="text" class="form-control" id="Address_Postcode" name="Address_Postcode" value="<?php echo $student['Address_Postcode'] ?>">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <br><label for="Address_Phone">โทรศัพท์</label>
                      <input type="text" class="form-control" id="Address_Phone" name="Address_Phone" value="<?php echo $student['Address_Phone'] ?>">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <br><label for="Address_Email">E-Mail</label>
                      <input type="text" class="form-control" id="Address_Email" name="Address_Email" value="<?php echo $student['Address_Email'] ?>">
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
                        <input type="text" class="form-control" id="Father_Name" name="Father_Name" value="<?php echo $student['Father_Name'] ?>">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                      <br><label for="Father_Career">อาชีพ</label>
                        <input type="text" class="form-control" id="Father_Career" name="Father_Career" value="<?php echo $student['Father_Career'] ?>">
                      </div>
                    </div>
                    <div class="form-group col-sm-4">
                    <br><label for="Father_status">สถานภาพ</label>
                      <select class="form-control" id="Father_status" name="Father_Status">
                      <?php foreach(get_status_creator() as $key => $status_creator){
                        if($student['Father_Status'] == $key){
                          echo '<option value="'.$key.'" selected>'.$status_creator.'</option>';
                        } else {
                          echo '<option value="'.$key.'">'.$status_creator.'</option>';
                        }
                      } ?>
                      </select>
                  </div>  
                </div> 
                <div class="row">
                  <div class="col-sm-3">
                    <div class="form-group">
                      <br><label for="Fatheraddress_Number">บ้านเลขที่</label>
                      <input type="text" class="form-control" id="Fatheraddress_Number" name="Fatheraddress_Number" value="<?php echo $student['Fatheraddress_Number'] ?>">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <br><label for="Fatheraddress_Moo">หมู่</label>
                      <input type="text" class="form-control" id="Fatheraddress_Moo" name="Fatheraddress_Moo" value="<?php echo $student['Fatheraddress_Moo'] ?>">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <br><label for="Fatheraddress_Soi">ซอย</label>
                      <input type="text" class="form-control" id="Fatheraddress_Soi" name="Fatheraddress_Soi" value="<?php echo $student['Fatheraddress_Soi'] ?>">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <br><label for="Fatheraddress_Tumbon">ตำบล / แขวง</label>
                      <input type="text" class="form-control" id="Fatheraddress_Tumbon" name="Fatheraddress_Tumbon" value="<?php echo $student['Fatheraddress_Tumbon'] ?>">
                    </div>
                  </div>
                </div>    
                  <div class="row">
                  <div class="col-sm-3">
                    <div class="form-group">
                      <br><label for="Fatheraddress_Aumper">อำเภอ / เขต</label>
                      <input type="text" class="form-control" id="Fatheraddress_Aumper" name="Fatheraddress_Aumper" value="<?php echo $student['Fatheraddress_Aumper'] ?>">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <br><label for="Fatheraddress_Province">จังหวัด</label>
                      <input type="text" class="form-control" id="Fatheraddress_Province" name="Fatheraddress_Province" value="<?php echo $student['Fatheraddress_Province'] ?>">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <br><label for="Fatheraddress_Postcode">รหัสไปรษณีย์</label>
                      <input type="text" class="form-control" id="Fatheraddress_Postcode" name="Fatheraddress_Postcode" value="<?php echo $student['Fatheraddress_Postcode'] ?>">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <br><label for="Father_Phone">โทรศัพท์</label>
                      <input type="text" class="form-control" id="Father_Phone" name="Father_Phone" value="<?php echo $student['Father_Phone'] ?>">
                    </div>
                  </div>
                </div>             
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <br><label for="Father_Email">E-Mail</label>
                      <input type="text" class="form-control" id="Father_Email" name="Father_Email" value="<?php echo $student['Father_Email'] ?>">
                    </div>
                  </div>
                </div>
                <B>ข้อมูลมารดา</B>
                <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <br><label for="Mother_Name">ชื่อมารดา</label>
                        <input type="text" class="form-control" id="Mother_Name" name="Mother_Name" value="<?php echo $student['Mother_Name'] ?>">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                      <br><label for="Mother_Career">อาชีพ</label>
                        <input type="text" class="form-control" id="Mother_Career" name="Mother_Career" value="<?php echo $student['Mother_Career'] ?>">
                      </div>
                    </div>
                    <div class="form-group col-sm-4">
                    <br><label for="Mother_Status">สถานภาพ</label>
                      <select class="form-control" id="Mother_Status" name="Mother_Status">
                        <?php foreach(get_status_creator() as $key => $status_creator){
                          if($student['Mother_Status'] == $key){
                            echo '<option value="'.$key.'" selected>'.$status_creator.'</option>';
                          } else {
                            echo '<option value="'.$key.'">'.$status_creator.'</option>';
                          }
                        } ?>
                      </select>
                  </div>  
                </div> 
                <div class="row">
                  <div class="col-sm-3">
                    <div class="form-group">
                      <br><label for="Motheraddress_Number">บ้านเลขที่</label>
                      <input type="text" class="form-control" id="Motheraddress_Number" name="Motheraddress_Number" value="<?php echo $student['Motheraddress_Number'] ?>">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <br><label for="Motheraddress_Moo">หมู่</label>
                      <input type="text" class="form-control" id="Motheraddress_Moo" name="Motheraddress_Moo" value="<?php echo $student['Motheraddress_Moo'] ?>">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <br><label for="Motheraddress_Soi">ซอย</label>
                      <input type="text" class="form-control" id="Motheraddress_Soi" name="Motheraddress_Soi" value="<?php echo $student['Motheraddress_Soi'] ?>">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <br><label for="Motheraddress_Tumbon">ตำบล / แขวง</label>
                      <input type="text" class="form-control" id="Motheraddress_Tumbon" name="Motheraddress_Tumbon" value="<?php echo $student['Motheraddress_Tumbon'] ?>">
                    </div>
                  </div>
                </div>    
                  <div class="row">
                  <div class="col-sm-3">
                    <div class="form-group">
                      <br><label for="Motheraddress_Aumper">อำเภอ / เขต</label>
                      <input type="text" class="form-control" id="Motheraddress_Aumper" name="Motheraddress_Aumper" value="<?php echo $student['Motheraddress_Aumper'] ?>">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <br><label for="Motheraddress_Province">จังหวัด</label>
                      <input type="text" class="form-control" id="Motheraddress_Province" name="Motheraddress_Province" value="<?php echo $student['Motheraddress_Province'] ?>">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <br><label for="Motheraddress_Postcode">รหัสไปรษณีย์</label>
                      <input type="text" class="form-control" id="Motheraddress_Postcode" name="Motheraddress_Postcode" value="<?php echo $student['Motheraddress_Postcode'] ?>">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <br><label for="Mother_Phone">โทรศัพท์</label>
                      <input type="text" class="form-control" id="Mother_Phone" name="Mother_Phone" value="<?php echo $student['Mother_Phone'] ?>">
                    </div>
                  </div>
                </div>             
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <br><label for="Mother_Email">E-Mail</label>
                      <input type="text" class="form-control" id="Mother_Email" name="Mother_Email" value="<?php echo $student['Mother_Email'] ?>">
                    </div>
                  </div>
                </div><br>
                <B>5. ข้อมูลผู้ปกครอง</B><br>
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <br><label for="Parent_Name">ชื่อ</label>
                        <input type="text" class="form-control" id="Parent_Name" name="Parent_Name" value="<?php echo $student['Parent_Name'] ?>">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                      <br><label for="Parent_Career">อาชีพ</label>
                        <input type="text" class="form-control" id="Parent_Career" name="Parent_Career" value="<?php echo $student['Parent_Career'] ?>">
                      </div>
                    </div>
                    

                    <div class="form-group col-sm-4">
                    <br><label for="Parent_Status">ความสัมพันธ์</label>
                      <select class="form-control" id="Parent_Status" name="Parent_Status">
                        <?php foreach(get_status_parent() as $key => $status_parent){
                          if($student['Parent_Status'] == $key){
                            echo '<option value="'.$key.'" selected>'.$status_parent.'</option>';
                          } else {
                            echo '<option value="'.$key.'">'.$status_parent.'</option>';
                          }
                        } ?>
                      </select>
                  </div>  
                    
                  </div>
                  <div class="row">
                  <div class="col-sm-3">
                    <div class="form-group">
                      <br><label for="Parentaddress_Number">บ้านเลขที่</label>
                      <input type="text" class="form-control" id="Parentaddress_Number" name="Parentaddress_Number" value="<?php echo $student['Parentaddress_Number'] ?>">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <br><label for="Parentaddress_Moo">หมู่</label>
                      <input type="text" class="form-control" id="Parentaddress_Moo" name="Parentaddress_Moo" value="<?php echo $student['Parentaddress_Moo'] ?>">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <br><label for="Parentaddress_Soi">ซอย</label>
                      <input type="text" class="form-control" id="Parentaddress_Soi" name="Parentaddress_Soi" value="<?php echo $student['Parentaddress_Soi'] ?>">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <br><label for="Parentaddress_Tumbon">ตำบล / แขวง</label>
                      <input type="text" class="form-control" id="Parentaddress_Tumbon" name="Parentaddress_Tumbon" value="<?php echo $student['Parentaddress_Tumbon'] ?>">
                    </div>
                  </div>
                </div>    
                  <div class="row">
                  <div class="col-sm-3">
                    <div class="form-group">
                      <br><label for="Parentaddress_Aumper">อำเภอ / เขต</label>
                      <input type="text" class="form-control" id="Parentaddress_Aumper" name="Parentaddress_Aumper" value="<?php echo $student['Parentaddress_Aumper'] ?>">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <br><label for="Parentaddress_Province">จังหวัด</label>
                      <input type="text" class="form-control" id="Parentaddress_Province" name="Parentaddress_Province" value="<?php echo $student['Parentaddress_Province'] ?>">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <br><label for="Parentaddress_Postcode">รหัสไปรษณีย์</label>
                      <input type="text" class="form-control" id="Parentaddress_Postcode" name="Parentaddress_Postcode" value="<?php echo $student['Parentaddress_Postcode'] ?>">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <br><label for="Parent_Phone">โทรศัพท์</label>
                      <input type="text" class="form-control" id="Parent_Phone" name="Parent_Phone" value="<?php echo $student['Parent_Phone'] ?>">
                    </div>
                  </div>
                </div>             
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <br><label for="Parent_Email">E-Mail</label>
                      <input type="text" class="form-control" id="Parent_Email" name="Parent_Email" value="<?php echo $student['Parent_Email'] ?>">
                    </div>
                  </div>
                </div><br>

                <B>5. ข้อมูลผู้ที่ติดต่อได้</B><br>
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <br><label for="Contact_Name">ชื่อ</label>
                        <input type="text" class="form-control" id="Contact_Name" name="Contact_Name" value="<?php echo $student['Contact_Name'] ?>">
                      </div>
                    </div>
                    
                    <div class="form-group col-sm-4">
                    <br><label for="Contact_Status">ความสัมพันธ์</label>
                      <select class="form-control" id="Contact_Status" name="Contact_Status">
                        <?php foreach(get_status_parent() as $key => $status_parent){
                          if($student['Contact_Status'] == $key){
                            echo '<option value="'.$key.'" selected>'.$status_parent.'</option>';
                          } else {
                            echo '<option value="'.$key.'">'.$status_parent.'</option>';
                          }
                        } ?>
                      </select>
                  </div>

                  <div class="col-sm-4">
                    <div class="form-group">
                      <br><label for="Contact_Email">E-Mail</label>
                      <input type="text" class="form-control" id="Contact_Email" name="Contact_Email" value="<?php echo $student['Contact_Email'] ?>">
                    </div>
                  </div>
                <br>
                </div>

                <div class="row">
                  <div class="col-sm-3">
                    <div class="form-group">
                      <br><label for="Contactaddress_Number">ที่อยู่ของผู้ที่ติดต่อได้</label>
                      <input type="text" class="form-control" id="Contactaddress_Number" name="Contactaddress_Number" value="<?php echo $student['Contactaddress_Number'] ?>">
                    </div>
                  </div>

                  <div class="col-sm-3">
                    <div class="form-group">
                      <br><label for="Contactaddress_Tumbon">ตำบล / แขวง</label>
                      <input type="text" class="form-control" id="Contactaddress_Tumbon" name="Contactaddress_Tumbon" value="<?php echo $student['Contactaddress_Tumbon'] ?>">
                    </div>
                  </div>

                  <div class="col-sm-3">
                    <div class="form-group">
                      <br><label for="Contactaddress_Aumper">อำเภอ / เขต</label>
                      <input type="text" class="form-control" id="Contactaddress_Aumper" name="Contactaddress_Aumper" value="<?php echo $student['Contactaddress_Aumper'] ?>">
                    </div>
                  </div>

                  <div class="col-sm-3">
                    <div class="form-group">
                      <br><label for="Contactaddress_Province">จังหวัด</label>
                      <input type="text" class="form-control" id="Contactaddress_Province" name="Contactaddress_Province" value="<?php echo $student['Contactaddress_Province'] ?>">
                    </div>
                  </div>
                  


                </div>    

                <div class="row">
                  <div class="col-sm-3">
                    <div class="form-group">
                      <br><label for="Contactaddress_Postcode">รหัสไปรษณีย์</label>
                      <input type="text" class="form-control" id="Contactaddress_Postcode" name="Contactaddress_Postcode" value="<?php echo $student['Contactaddress_Postcode'] ?>">
                    </div>
                  </div>

                  <div class="col-sm-3">
                    <div class="form-group">
                      <br><label for="Contact_Phone">โทรศัพท์</label>
                      <input type="text" class="form-control" id="Contact_Phone" name="Contact_Phone" value="<?php echo $student['Contact_Phone'] ?>">
                    </div>
                  </div>
                </div>             
                

                
                
          <button type="submit" class="btn btn-primary">บันทึก</button>
          
          </form>
              </div>
            </div>            
          </div>
        </Body>   
  </body>