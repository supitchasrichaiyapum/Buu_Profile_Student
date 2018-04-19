
    <style>
table {
    width:100%;
}
th {
    padding: 5px;
    text-align: left;
    font-size: 1.3em;
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

    header.page-header { 
  padding: 0px 0; 
  }
      </style>

  <div class="content-inner">
  <header class="page-header">
    <div class="container-fluid">
      <ul class="breadcrumb">
        <li><a href="<?php echo site_url('student/c_student/menu_student');?>">หน้าหลัก</a></li>
        <li>ข้อมูลส่วนตัว</li>
      </ul>
    </div>
  </header>
  <br>
<Body>
<div class="col-sm-12">
  <div class="card">
    <div class="card-header">
      <strong><center>ข้อมูลทั่วไป</strong>
    </div>
    <div class="card-body">

    <div class="form-group row">
      <label class="col-sm-2 col-form-label"><b>ชื่อ - นามสกุล (ภาษาไทย) </b></label>
        <div class="col-sm-3 col-form-label">
        <p id="name_th"><b>:</b> <?php echo $student['Student_Prefix'] ?> <?php echo $student['Student_Name_Th'] ?> <?php echo $student['Student_Lname_Th'] ?> </p>
        </div>
        <label class="col-sm-2 col-form-label"><b>ชื่อ - นามสกุล (ภาษาอังกฤษ) </b></label>
        <div class="col-sm-3 col-form-label">
        <p id="name_eng"><b>:</b> <?php echo $student['Student_Name_Eng'] ?> <?php echo $student['Student_Lname_Eng'] ?> </p>
        </div>
    </div>   

    <div class="form-group row">
      <label class="col-sm-2 col-form-label"><b>ชื่อเล่น </b></label>
        <div class="col-sm-3 col-form-label">
        <p id="nickname"><b>:</b> <?php echo $student['Student_Nickname'] ?></p>
        </div>
        <label class="col-sm-2 col-form-label"><b>เลขประจำตัวประชาชน </b></label>
        <div class="col-sm-3 col-form-label">
        <p id="idnum"><b>:</b> <?php echo $student['Student_IdNum'] ?></p>
        </div>
    </div>   

    <div class="form-group row">
      <label class="col-sm-2 col-form-label"><b>วัน เดือน ปี เกิด </b></label>
        <div class="col-sm-3 col-form-label">
        <p id="birthday"><b>:</b> <?php echo thaiDate($student['Birthday'], true, false) ?> </p>
        </div>
        <label class="col-sm-2 col-form-label"><b>กรุ๊ปเลือด </b></label>
        <div class="col-sm-3 col-form-label">
        <p id="blood"><b>:</b> <?php echo $student['Blood'] ?></p>
        </div>
    </div>     

    <div class="form-group row">
      <label class="col-sm-2 col-form-label"><b>สัญชาติ </b></label>
        <div class="col-sm-3 col-form-label">
        <p id="nationality"><b>:</b> <?php echo $student['Nationality'] ?> </p>
        </div>
        <label class="col-sm-2 col-form-label"><b>ศาสนา </b></label>
        <div class="col-sm-3 col-form-label">
        <p id="relidion"><b>:</b> <?php echo $student['Relidion'] ?></p>
        </div>
    </div>

    <div class="form-group row">
      <label class="col-sm-2 col-form-label"><b>Facebook </b></label>
        <div class="col-sm-3 col-form-label">
        <p id="facebook"><b>:</b> <?php echo $student['Facebook'] ?> </p>
        </div>
        <label class="col-sm-2 col-form-label"><b>Line </b></label>
        <div class="col-sm-3 col-form-label">
        <p id="line"><b>:</b> <?php echo $student['Line'] ?></p>
        </div>
    </div>

    <div class="form-group row">
      <label class="col-sm-2 col-form-label"><b>E-mail </b></label>
        <div class="col-sm-3 col-form-label">
        <p id="e_mail"><b>:</b> <?php echo $student['Student_Email'] ?> </p>
        </div>
      <label class="col-sm-2 col-form-label"><b>เบอร์โทรศัพท์ </b></label>
        <div class="col-sm-3 col-form-label">
        <p id="student_phone"><b>:</b> <?php echo $student['Student_Phone'] ?> </p>
        </div>
    </div>            

    </div>               
  </div>

  

</Body>
