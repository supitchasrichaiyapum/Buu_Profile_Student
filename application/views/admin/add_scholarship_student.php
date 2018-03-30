<style>

table {
    width:60%;
}
th, td {
    padding: 5px;
    text-align: left;
}

.button {
    background-color: #4CAF50;
    border: 1;
    color: white;
    padding: 5px 22px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
.button {border-radius: 8px;}
table {
    width:100%;
}
th, td {
    padding: 5px;
    text-align: left;
}
section.dashboard-counts .row {
  padding: 5px 5px;
}
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
  
  <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
            <ul class="breadcrumb">
                <li><a href="<?php echo site_url('admin/c_admin/menu_admin');?>">หน้าหลัก</a></li>
                <li><a href="<?php echo site_url('admin/c_admin/scholarship_student_admin');?>">ทุนการศึกษา</a></li>
                <li><a href="<?php echo site_url('admin/c_admin/insert_form_scholarship/');?>">เพิ่มรายชื่อทุนการศึกษา</a></li>
                 
            </ul>
            
            </div>
          </header>
          <br>
        <Body>
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                <h1><strong><center>เพิ่มทุนการศึกษา</strong></h1>
                </div>
                    <div class="card-body">
                        <form action="<?php echo site_url("admin/c_admin/insert_scholarship/")?>" method="post" ><br>
                        <?php echo validation_errors('<div class="alert alert-danger" role="alert">', '</div>'); ?>                           
                            <div class="row">
                                <div class="container">
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="text-input">ชื่อทุนการศึกษา</label>
                                            <div class="col-md-3">
                                            <input type="text" id="Scholarship_Name" name="Scholarship_Name" class="form-control" required="">
                                            </div>
                                    </div>                                    
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="text-input">ผู้มอบทุนการศึกษา</label>
                                            <div class="col-md-3">
                                                <input type="text" id="Scholarship_Giver" name="Scholarship_Giver" class="form-control" required="">
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="text-input">จำนวน(บาท)<code>* ตัวอย่าง 5000</code></label>
                                            <div class="col-md-3">
                                                <input type="text" id="Scholarship_Amount" name="Scholarship_Amount" class="form-control" required="">
                                            </div>
                                    </div>
                                    <center>
                                    <button type="reset" class="btn btn-sm btn-danger"> ยกเลิก </button>
                                    <button type="submit" class="btn btn-sm btn-success"> ตกลง </button>
                                    </center>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <script>
      $(document).ready(function() {
          $('#datatable').DataTable();
      } );
    </script>
