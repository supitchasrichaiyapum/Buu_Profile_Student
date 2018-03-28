<Body>
        <div class="content-inner">
          <!-- Page Header-->
          <br>
        
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header">
              <strong><center>แก้ไขทุนการศึกษา</strong>
            </div>
            
            <form action="<?php echo site_url("admin/c_admin/editscholarship_student_admin/".$result[0]['Scholarship_ID']);?>" method="post" ><br>
            <?php echo validation_errors('<div class="alert alert-danger" role="alert">', '</div>'); ?>                           
           <div class="card-body">
         
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input" >ชื่อทุนการศึกษา</label>
                            <div class="col-md-3">
                                <input type="text" id="Scholarship_Name" name="Scholarship_Name" class="form-control" required="" value="<?php echo $result[0]['Scholarship_Name']; ?>">
                            </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">ผู้มอบทุนการศึกษา</label>
                        <div class="col-md-3">
                            <input type="text" id="Scholarship_Giver" name="Scholarship_Giver" class="form-control" required=""  value="<?php echo $result[0]['Scholarship_Giver']; ?>">
                        </div>
                    </div>  
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">จำนวน(บาท)<code>* ตัวอย่าง 5000</code></label>
                        <div class="col-md-3">
                            <input type="text" id="Scholarship_Amount" name="Scholarship_Amount" class="form-control" required="" value="<?php echo $result[0]['Scholarship_Amount']; ?>"><br>
                        </div>
                    </div>
               
                    <div class="text-center">
                            <button type="reset" class="btn btn-sm btn-danger"> ยกเลิก </button>
                            <button type="submit" class="btn btn-sm btn-success"> บันทึก </button>                        
                    </div> 
            
                </form>
            </div>
        </div>
    </div>
</Body>
