<Body>
        <div class="content-inner">
          <!-- Page Header-->
          <br>
        
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header">
              <strong><center>แก้ไขกิจกรรม</strong>
            </div>
            
            <form action="<?php echo site_url("admin/c_admin/editactivity_student_admin/".$result[0]['Activitie_ID']);?>" method="post" ><br>
            <?php echo validation_errors('<div class="alert alert-danger" role="alert">', '</div>'); ?>  
           <div class="card-body">
         
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input" >ชื่อกิจกรรม</label>
                            <div class="col-md-3">
                                <input type="text" id="Activitie_Name" name="Activitie_Name" class="form-control" required="" value="<?php echo $result[0]['Activitie_Name']; ?>">
                            </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">เทอม</label>
                            <div class="col-md-3">
                                <select id="Activity_Term" name="Activity_Term" class="form-control" >                                    
                                    <?php foreach(get_terms() as $key => $term){
                                        if($result[0]['Activity_Term'] == $key){
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
                            <input type="text" id="Activity_Year" name="Activity_Year" class="form-control" required=""  value="<?php echo $result[0]['Activity_Year']; ?>">
                        </div>
                    </div>  
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">ชั่วโมง</label>
                        <div class="col-md-3">
                            <input type="text" id="Hour" name="Hour" class="form-control" required=""  value="<?php echo $result[0]['Hour']; ?>"><br>
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
