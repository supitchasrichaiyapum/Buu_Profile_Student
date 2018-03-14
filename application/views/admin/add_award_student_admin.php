<Body>
        <div class="content-inner">
          <!-- Page Header-->
          <br>
        
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header">
              <strong><center>เพิ่มรางวัลการแข่งขัน</strong>
            </div>

           <div class="card-body">
                <form action="<?php echo site_url('admin/c_admin/insert');?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">ปีการศึกษา</label>
                            <div class="col-md-3">
                                <input type="text" id="Award_Term" name="Award_Term" class="form-control" required="">
                            </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">วัน / เดือน / ปี</label>
                            <div class="col-md-3">
                                <input type="date" id="Award_Date" name="Award_Date" class="form-control" required="">
                            </div>
                    </div> 
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">ชื่อรางวัล</label>
                            <div class="col-md-3">
                                <input type="text" id="Award_Name" name="Award_Name" class="form-control" required="">
                            </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">หลักสูตร</label>
                            <div class="col-md-3">
                                <select id="Award_Course" name="Award_Course" class="form-control" required="">
                                    <option value="SE">วิศวกรรมซอฟต์แวร์</option>
                                    <option value="CS">วิทยาการคอมพิวเตอร์</option>
                                    <option value="IT">เทคโนโลยีสารสนเทศ</option>
                                </select>
                            </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">อาจารย์ผู้ช่วย</label>
                            <div class="col-md-3">
                                <input type="text" id="Award_Owner" name="Award_Owner" class="form-control" required="">
                            </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">จำนวน(บาท)</label>
                            <div class="col-md-3">
                                <input type="text" id="Award_Owner" name="Award_Owner" class="form-control" required="">
                            </div>
                    </div>
                   
                    
                    <button type="submit" class="btn btn-sm btn-success"><a href="<?php echo site_url('admin/c_admin/add_award_student');?>"> ตกลง </a></button>
                    <button type="reset" class="btn btn-sm btn-danger"> ยกเลิก </button>
                </form>
            </div>
        </div>
    </div>
</Body>