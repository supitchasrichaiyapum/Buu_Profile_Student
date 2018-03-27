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
                        <!-- <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="text-input"><h3>ชื่อรางวัลการแข่งขัน</h3></label>
                                <div class="col-md-9">                        
                                <input type="text" id="disabled-input" name="disabled-input" class="form-control" placeholder="การแข่งขันเขียนโปรแกรม ปี 12" disabled="">
                                </div>
                        </div> -->
                        <form action="<?php echo site_url("admin/c_admin/insert_award/")?>" method="post" >                    
                            
                            <?php echo validation_errors('<div class="alert alert-danger" role="alert">', '</div>'); ?>
                            
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="text-input">ชื่อรางวัลการแข่งขัน</label>
                            <div class="col-md-3">
                                <input type="text" id="Award_Name" name="Award_Name" class="form-control">
                            </div>
                        </div>        
                        <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">เทอม</label>
                            <div class="col-md-3">
                                <select id="Award_Term" name="Award_Term" class="form-control">
                                    <option value="1">เทอม 1</option>
                                    <option value="2">เทอม 2</option>
                                    <option value="3">ซัมเมอร์</option>
                                </select>
                            </div>                           
                        </div>  
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="text-input">ปีการศึกษา</label>
                            <div class="col-md-3">
                                <input type="text" id="Award_Year" name="Award_Year" class="form-control">
                            </div>
                        </div>  
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="text-input">อาจารย์ผู้ช่วย</label>
                            <div class="col-md-3">
                                <input type="text" id="Award_Giver" name="Award_Giver" class="form-control"><br>
                            </div>
                        </div> 
                        <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">จำนวน(บาท)<code>* ตัวอย่าง 5000</code></label>

                            <div class="col-md-3">
                                <input type="text" id="Award_Amount" name="Award_Amount" class="form-control" required=""><br>
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
        </div>
</Body>
