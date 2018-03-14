
<div class="content-inner"><br>
  <!-- Page Header-->
  <div class="col-sm-12">
          <div class="card">
            <div class="card-header">
              <strong><center>เพิ่มข้อมูลเกรดเฉลี่ยแต่ละภาคเรียน</strong>
            </div> 

            <form role="form" action="<?php echo site_url('admin/c_admin/post_gradstudent');?>" method="post" enctype="multipart/form-data">
              <div id="step-3">
               <div class="col-xs-6 col-md-offset-3">
                <div class="col-md-12">
                  <?php 
                  if($status) {
                    echo '<br>';
                    echo '<div class="alert alert-'.$status['color'].'" role="alert"> '.$status['text'].' </div>';
                  } ?>
                <div class="col-md-12 form-group" >
                  <div class="form-group row">
                    <label class="col-md-12 col-form-label" for="text-input">เลือกไฟล์</label>
                      <div class="col-md-5">
                        <input type="file" id="file-input" name="file-input" required="">
                        <button type="submit" class="btn btn-sm btn-success pull-right"> Submit</button>

                      </div><br>

                      <img class="col-sm-4" style="max-width:1000px" src="<?php echo base_url('theme/img/grade.png');?>">
                      <img class="col-sm-4" style="max-width:1000px" src="<?php echo base_url('theme/img/gradetable.png');?>">
                      </div>
                      

                  </div>         
                </div> 
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>