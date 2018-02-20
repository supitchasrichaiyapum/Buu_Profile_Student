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
              <strong><center>นิสิติรอพินิจ</strong>
            </div>
            <div class="card-body">
                <div class="container">
<table id="datatable" class="table table-striped table-bordered">
<thead>
            <tr>
                <th>รหัสนิสิต</th>
                <th>ชื่อ-นามสกุล</th>
                <th>เกรด</th>
            </tr>
</thead>   
<!--  -->
</table>             

  
                  </div>
                </div>
              </div>
            </div>
         


    <script>
      $(document).ready(function() {
          $('#datatable').DataTable();
      } );
    </script>
