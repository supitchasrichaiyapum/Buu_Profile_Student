<style>
meta name="viewport" content="width=device-width, initial-scale=1">
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
                <li><a href="<?php echo site_url('teacher/c_teacher/menu_teacher');?>">หน้าหลัก</a></li>
                <li>สถิติจำนวนนิสิต</li>     
            </ul>
            </div>
          </header>
          <br>
        <Body>
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header">
              <h1><strong><center>สถิติจำนวนนิสิต</strong><h1>
            </div>
            <div class="card-body">
              <div class="container">
                <div class="row"><BR>
                   <h2>สถิติจำนวนนิสิตในแต่ละปีการศึกษาและแต่ละเทอม</h2><BR><BR>
                    <iframe src="http://reg.buu.ac.th/registrar/stat.asp?avs21668122=2" style="width:100%; height:1200px; border:none;" scrolling="no" ></iframe>
                </div>
              </div>
          </div>
         <BR>
</Body>