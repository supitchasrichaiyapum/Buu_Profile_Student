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
                <li><a href="<?php echo site_url('admin/c_admin/scholarship_student_admin');?>">ทุนการศึกษา</a></li>
                <li><a href="<?php echo site_url('admin/c_admin/form_editscholarship_student_admin/');?>">แก้ไขทุนการศึกษา</a></li>
                 
            </ul>
            
            </div>
          </header>
          <br>
        
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header">
              <h1><strong><center>แก้ไขทุนการศึกษา</strong></h1>
            </div>
            
            <form action="<?php echo site_url("admin/c_admin/editscholarship_student_admin/".$result[0]['Scholarship_ID']);?>" method="post" ><br>
            <?php echo validation_errors('<div class="alert alert-danger" role="alert">', '</div>'); ?>                           
           <div class="card-body">
         
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input" >ชื่อทุนการศึกษา</label>
                            <div class="col-md-3">
                                <input type="text" id="Scholarship_Name" name="Scholarship_Name" class="form-control" required="" value="<?php echo $result[0]['Scholarship_Name']; ?>">
                            </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">ผู้มอบทุนการศึกษา</label>
                        <div class="col-md-3">
                            <input type="text" id="Scholarship_Giver" name="Scholarship_Giver" class="form-control" required=""  value="<?php echo $result[0]['Scholarship_Giver']; ?>">
                        </div>
                    </div>  
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">จำนวน(บาท)<code>* ตัวอย่าง 5000</code></label>
                        <div class="col-md-3">
                            <input type="text" id="Scholarship_Amount" name="Scholarship_Amount" class="form-control" required="" value="<?php echo $result[0]['Scholarship_Amount']; ?>"><br>
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
