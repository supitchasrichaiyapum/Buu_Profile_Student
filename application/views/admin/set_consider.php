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
      </style>
<Body>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
            <ul class="breadcrumb">
            <li><a href="<?php echo site_url('admin/c_admin/menu_admin');?>">หน้าหลัก</a></li>
                <li>เกณฑ์นิสิตรอพินิจ</li>
       
            </ul>
            </div>
          </header>
          <br>
        <Body>
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header">
              <h1><strong><center>เกณฑ์นิสิตรอพินิจ</strong></h1>
            </div>
            <div class="card-body">

       
          
         <BR>    
            <table id="" class="table table-striped table-bordered">
              <thead>
                <tr>
                <th>ชื่อหลักสูตร</th>               
                <th>เกณฑ์โปรสูง</th>
                <th>จำนวนครั้ง</th>  
                <th>เกณฑ์โปรต่ำ</th>   
                <th>จำนวนครั้ง</th>                
                <th></th>  
                </tr>
              </thead>   
              <tbody>
                      <?php foreach ($result as $row) { ?>
                        <form  method="post" action="<?php echo site_url("admin/c_admin/update_consider/"); ?>" id="form<?php echo $row->Course_ID ?>">
                        <tr>
                            <input type="hidden" name="Course_ID" value="<?php echo $row->Course_ID ?>">
                            <td><?php echo $row->Course_Name ?> </td>
                            <!-- <td><input type="text" id="Low" name="Low" class="form-control" value="<?php echo $row->Low ?>"> </td> -->
                            <td><input type="text" id="Gpa_High" name="Gpa_High" class="form-control" value="<?php echo $row->Gpa_High ?>"> </td>
                            <td><input type="text" id="Amount_High" name="Amount_High" class="form-control" value="<?php echo $row->Amount_High ?>"> </td>
                            <td><input type="text" id="Gpa_Low" name="Gpa_Low" class="form-control" value="<?php echo $row->Gpa_Low ?>"> </td>
                            <td><input type="text" id="Amount_Low" name="Amount_Low" class="form-control" value="<?php echo $row->Amount_Low ?>"> </td>
                            <!-- <td><center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="form-check-input" type="checkbox" value="1" <?php if($row->Summer == 1) echo 'checked'; ?> id="Summer" name="Summer"></center></td> -->
                            <td><center>
                              <button type="submit" class="btn btn-primary btn-sm"></i> บันทึก</button>&nbsp;
                            </center></td>
                        </tr>   
                         </form>   
                      <?php } ?>

                      </tbody>
             
        </table>
          <br>
       
</Body>

<script>
      $(document).ready(function() {
          $('#datatable').DataTable();
          $('.dataTables_filter').hide()
      } );
      
</script>