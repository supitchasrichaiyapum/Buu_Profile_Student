<style>
<meta name="viewport" content="width=device-width, initial-scale=1">
ul.breadcrumb {
    padding: 10px 16px;
    list-style: none;
    background-color: #eee;
}
ul.breadcrumb li {
    display: inline;
    font-size: 18px;
}
ul.breadcrumb li+li:before {
    padding: 8px;
    color: black;
    content: "/\00a0";
}
ul.breadcrumb li a {
    color: #0275d8;
    text-decoration: none;
}
ul.breadcrumb li a:hover {
    color: #01447e;
    text-decoration: underline;
}
</style>
<Body>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
          <ul class="breadcrumb">
                <li><a href="<?php echo site_url('admin/c_admin/menu_admin');?>">หน้าหลัก</a></li>
                <li><a href="<?php echo site_url('admin/c_admin/award_student_admin');?>">รางวัลการแข่งขัน</a></li>
                <li><a href="<?php echo site_url('admin/c_admin/insert_form_award');?>">เพิ่มรายชื่อรางวัลการแข่งขัน</a></li>
            </ul>
            </div>
          </header>
          <br>
          <br>        
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                <h1><strong><center>เพิ่มรายชื่อรางวัลการแข่งขัน</strong></h1>
                </div>
                    <div class="card-body">
                        <form action="<?php echo site_url("admin/c_admin/insert_award/")?>" method="post" >  <BR>                  
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
                            <div class="input-group col-md-5">     
                                <select name="Award_Year" onchange="open_iframe_Box()">
                                    <?php
                                        $year = date('Y')+543;
                                        //++ year
                                        for($i=$year-5;$i<$year+2;$i++) {
                                            if($i == $year) {
                                                echo '<option value="'.$i.'" selected>'.$i.'</option>';
                                            } else {
                                                echo '<option value="'.$i.'">'.$i.'</option>';		
                                            }
                                        }
                                    ?>
                                </select>                       
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
