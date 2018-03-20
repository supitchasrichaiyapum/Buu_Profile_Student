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
                        <form action="<?php echo site_url("admin/c_admin/insert_scholarship/")?>" method="post" >
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
                                        <label class="col-md-3 col-form-label" for="text-input">จำนวน(บาท)</label>
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
