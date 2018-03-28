<Body>
        <div class="content-inner">
          <!-- Page Header-->
          <br>
        
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header">
              <strong><center>เพิ่มรายชื่อนิสิตในกิจกรรม</strong>
            </div>
            <form action="<?php echo site_url("admin/c_admin/insert_student_activity/")?>" method="post" ><br>
            <?php echo validation_errors('<div class="alert alert-danger" role="alert">', '</div>'); ?>  
           <div class="card-body">
                <!-- <form action="<?php echo site_url('admin/c_admin/insert');?>" method="post" enctype="multipart/form-data" class="form-horizontal"> -->
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">รหัสนิสิต</label>
                            <div class="col-md-3">
                                <input type="hidden" id="Activity_Activitie_ID" name="Activity_Activitie_ID" value="<?php echo $activity_id;?>">
                                <input type="text" id="Student_Student_ID" name="Student_Student_ID" class="form-control" required="">
                                
                            </div>
                    </div>
                    <div class="text-center">
                            <button type="reset" class="btn btn-sm btn-danger"> ยกเลิก </button>
                            <button type="submit" class="btn btn-sm btn-success"> ตกลง </button>
                            
                    </div>
                </form>
            </div>
        </div>
    </div>
</Body>
