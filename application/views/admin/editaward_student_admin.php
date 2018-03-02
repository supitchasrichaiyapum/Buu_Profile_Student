<Body>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
            </div>
          </header>
          <br>
        <Body>
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header">
              <strong><center>แก้ไขรางวัลการแข่งขัน</strong>
            </div>

           <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                <?php foreach($query as $rows){ ?>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">ปีการศึกษา</label>
                            <div class="col-md-3">
                                <input type="text" id="Award_Term" name="Award_Term" class="form-control" value="<?php echo $rows['Award_Term']?>" required="">
                            </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">ชื่อ - นามสกุล (นิสิต)</label>
                            <div class="col-md-3">
                                <input type="text" id="Award_Name" name="Award_Name" class="form-control" value="<?php echo $rows['Award_Name']?>" required="">
                            </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">หลักสูตร</label>
                            <div class="col-md-3">
                                <select id="Award_Course" name="Award_Course" class="form-control" required="">

                                <!-- <?php foreach ($ชื่ออะไรก็ได้ as $row) {
													echo "<option value=\"".$row['ไอดีสาขา']."\">" .$rows['ชื่อสาขา']. "</option>";
												} ?> -->
                                    <option value="SE">วิศวกรรมซอฟต์แวร์</option>
                                    <option value="CS">วิทยาการคอมพิวเตอร์</option>
                                    <option value="IT">เทคโนโลยีสารสนเทศ</option>
                                </select>
                            </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">อาจารย์ผู้ช่วย</label>
                            <div class="col-md-3">
                                <input type="text" id="Award_Owner" name="Award_Owner" class="form-control" value="<?php echo $rows['Award_Owner']?>" required="">
                            </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">ชื่อผลงาน</label>
                            <div class="col-md-3">
                                <input type="text" id="Award_Name" name="Award_Name" class="form-control" value="<?php echo $rows['Award_Name']?>" required="">
                            </div>
                        </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">วัน / เดือน / ปี</label>
                            <div class="col-md-3">
                                <input type="date" id="Award_Date" name="Award_Date" class="form-control" value="<?php echo $rows['Award_Date']?>" required="">
                            </div>
                    </div>
                    <button type="submit" class="btn btn-sm btn-success"> ตกลง </button>
                    <button type="reset" class="btn btn-sm btn-danger"> ยกเลิก </button>
                <?php } ?>
                </form>
            </div>
</Body>