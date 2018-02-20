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
                <strong><center>แก้ไขข้อมูลกิจกรรม</strong>
                </div>
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row">
                                <div class="container">                             
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="text-input">ชื่อ-นามสกุล</label>
                                            <div class="col-md-3">
                                            <input type="email" id="email-input" name="email-input" class="form-control">
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="text-input">ปีการศึกษา</label>
                                            <div class="col-md-3">
                                            <input type="email" id="email-input" name="email-input" class="form-control">
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="text-input">เทอม</label>
                                            <div class="col-md-3">
                                                <select id="select1" name="select1" class="form-control">
                                                    <option value="SE">ซัมเมอร์</option>
                                                    <option value="CS">เทอม 1</option>
                                                    <option value="IT">เทอม 2</option>
                                                </select>
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="text-input">วัน เดือน ปี</label>
                                            <div class="col-md-3">
                                            <input type="date" id="email-input" name="email-input" class="form-control">
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="text-input">ชื่อกิจกรรม</label>
                                            <div class="col-md-3">
                                            <input type="email" id="email-input" name="email-input" class="form-control">
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="text-input">ชั่วโมง</label>
                                            <div class="col-md-3">
                                                <input type="email" id="email-input" name="email-input" class="form-control">
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
