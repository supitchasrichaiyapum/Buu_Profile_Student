<Body>
        <div class="content-inner">
          <!-- Page Header-->
          <br>
        
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header">
              <strong><center>เพิ่มรายชื่อนิสิตในรางวัลการแข่งขัน</strong>
            </div>
            <form action="<?php echo site_url("admin/c_admin/insert_student_award/")?>" method="post" >
           <div class="card-body">
                <form action="<?php echo site_url('admin/c_admin/insert');?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">วัน / เดือน / ปี</label>
                            <div class="col-md-3">
                                <input type="date" id="Award_Date" name="Award_Date" class="form-control" required="">
                            </div>
                    </div> 
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">รหัสนิสิต</label>
                            <div class="col-md-3">
                                <input type="hidden" id="Award_ID" name="Award_ID" value="<?php echo $award_id;?>">
                                <input type="text" id="Student_ID" name="Student_ID" class="form-control" required="">
                                
                            </div>
                    </div>
                    <div class="text-center">
                            <button type="submit" class="btn btn-sm btn-success"> ตกลง </button>
                            <button type="reset" class="btn btn-sm btn-danger"> ยกเลิก </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</Body>
