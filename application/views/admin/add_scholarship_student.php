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
                <strong><center>เพิ่มทุนการศึกษา</strong>
                </div>
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row">
                                <div class="container">
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="text-input">รหัสนิสิต</label>
                                            <div class="col-md-3">
                                            <input type="text" id="text-input" name="text-input" class="form-control" required="">
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="text-input">ชื่อ</label>
                                            <div class="col-md-3">
                                            <input type="text" id="text-input" name="text-input" class="form-control" required="">
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="text-input">นามสกุล</label>
                                            <div class="col-md-3">
                                            <input type="text" id="text-input" name="text-input" class="form-control" required="">
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="text-input">วัน เดือน ปี</label>
                                            <div class="col-md-3">
                                            <input type="date" id="text-input" name="text-input" class="form-control" required="">
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="text-input">ชื่อทุน</label>
                                            <div class="col-md-3">
                                            <input type="text" id="text-input" name="text-input" class="form-control" required="">
                                            </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="text-input">ผู้มอบทุน</label>
                                            <div class="col-md-3">
                                                <input type="text" id="text-input" name="text-input" class="form-control" required="">
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="text-input">จำนวน(บาท)</label>
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
