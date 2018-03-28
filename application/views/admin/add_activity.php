<Body>
        <div class="content-inner">
          <!-- Page Header-->
          <br>        
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                <strong><center>เพิ่มกิจกรรม</strong>
                </div>
                    <div class="card-body">
                        <!-- <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="text-input"><h3>ชื่อรางวัลการแข่งขัน</h3></label>
                                <div class="col-md-9">                        
                                <input type="text" id="disabled-input" name="disabled-input" class="form-control" placeholder="การแข่งขันเขียนโปรแกรม ปี 12" disabled="">
                                </div>
                        </div> -->
                        <form action="<?php echo site_url("admin/c_admin/insert_activity/")?>" method="post" >
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="text-input">ชื่อกิจกรรม</label>
                            <div class="col-md-3">
                                <input type="text" id="Activitie_Name" name="Activitie_Name" class="form-control">
                            </div>
                        </div>        
                        <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">เทอม</label>
                            <div class="col-md-3">
                                <select id="Activity_Term" name="Activity_Term" class="form-control">
                                    <option value="1">เทอม 1</option>
                                    <option value="2">เทอม 2</option>
                                    <option value="3">ซัมเมอร์</option>
                                </select>
                            </div>                           
                        </div>  
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="text-input">ปีการศึกษา</label>
                            <div class="col-md-3">
                                <input type="text" id="Activity_Year" name="Activity_Year" class="form-control">
                            </div>
                        </div>  
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="text-input">ชั่วโมง</label>
                            <div class="col-md-3">
                                <input type="text" id="Hour" name="Hour" class="form-control"><br>
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
