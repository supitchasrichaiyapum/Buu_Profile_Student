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
</style>
  
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
                <strong><center>เพิ่มข้อมูลกิจกรรม</strong>
                </div>
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row">
                                <div class="container">     
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="text-input">รหัสนิสิต</label>
                                            <div class="col-md-3">
                                            <input type="text" id="text-input" name="student_ID" class="form-control" required="">
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="text-input">ชื่อ</label>
                                            <div class="col-md-3">
                                            <input type="name" id="text-input" name="name" class="form-control" required="">
                                            </div>
                                    </div>    
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="text-input">นามสกุล</label>
                                            <div class="col-md-3">
                                            <input type="lname" id="text-input" name="lname" class="form-control" required="">
                                            </div>
                                    </div>                     
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="text-input">ปีการศึกษา</label>
                                            <div class="col-md-3">
                                            <input type="year" id="text-input" name="activityyear" class="form-control" required="">
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="text-input">เทอม</label>
                                            <div class="col-md-3">
                                                <select id="select1" name="select1" class="form-control" required="">
                                                    <option value="1">เทอม 1</option>
                                                    <option value="2">เทอม 2</option>
                                                    <option value="0">ซัมเมอร์</option>
                                                </select>
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="text-input">ชื่อกิจกรรม</label>
                                            <div class="col-md-3">
                                            <input type="text" id="text-input" name="text-input" class="form-control" required="">
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="text-input">จำนวน(ชั่วโมง)</label>
                                            <div class="col-md-3">
                                                <input type="text" id="text-input" name="text-input" class="form-control" required="">
                                            </div>
                                    </div>
                                    <button type="submit" class="btn btn-sm btn-success"> ตกลง </button>
                                    <button type="reset" class="btn btn-sm btn-danger"> ยกเลิก </button>
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
