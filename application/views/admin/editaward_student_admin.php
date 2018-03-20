<Body>
        <div class="content-inner">
          <!-- Page Header-->
          <br>
        
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header">
              <strong><center>แก้ไขรายชื่อรางวัลการแข่งขัน</strong>
            </div>
            
            <form action="<?php echo site_url("admin/c_admin/editaward_student_admin/".$result[0]['Award_ID']);?>" method="post" >
           <div class="card-body">
         
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input" >ชื่อรางวัล</label>
                            <div class="col-md-3">
                                <input type="text" id="Award_Name" name="Award_Name" class="form-control" required="" value="<?php echo $result[0]['Award_Name']; ?>">
                            </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">เทอม</label>
                            <div class="col-md-3">
                                <select id="Award_Term" name="Award_Term" class="form-control" >                                    
                                    <?php foreach(get_terms() as $key => $term){
                                        if($result[0]['Award_Term'] == $key){
                                            echo '<option value="'.$key.'" selected> '.$term.' </option>';                                          
                                        } else {
                                            echo '<option value="'.$key.'" > '.$term.' </option>';
                                        }
                                     } ?>
                                    
                                </select>
                            </div>                           
                    </div> 
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">ปีการศึกษา</label>
                        <div class="col-md-3">
                            <input type="text" id="Award_Year" name="Award_Year" class="form-control" required=""  value="<?php echo $result[0]['Award_Year']; ?>">
                        </div>
                    </div>  
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">อาจารย์ผู้ช่วย</label>
                        <div class="col-md-3">
                            <input type="text" id="Award_Giver" name="Award_Giver" class="form-control" required=""  value="<?php echo $result[0]['Award_Giver']; ?>"><br>
                        </div>
                    </div> 
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">จำนวน(บาท)</label>
                        <div class="col-md-3">
                            <input type="text" id="Award_Amount" name="Award_Amount" class="form-control" required="" value="<?php echo $result[0]['Award_Amount']; ?>"><br>
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
