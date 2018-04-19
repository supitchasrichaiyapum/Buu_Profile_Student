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
    header.page-header { 
  padding: 0px 0; 
  }
</style>
<Body>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
            <ul class="breadcrumb">
            <li><a href="<?php echo site_url('admin/c_admin/menu_admin');?>">หน้าหลัก</a></li>
            <li>สถิติจำนวนนิสิต</li>
            </ul>
            </div>
          </header>
          <br>
        <Body>
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header">
              <h1><strong><center>สถิติจำนวนนิสิต</strong></h1>
            </div>
            <div class="card-body">
              <div class="container">
                <div class="row">
                  <label class="col-md-3 col-form-label" for="text-input"><b>ปีการศึกษา</b></label>
                  <div class="col-md-3">                          
                    <div id="custom-search-input"> 
                        <div class="input-group col-md-12">     
                                <select name="acadyear" onchange="open_iframe_Box()">
                                    <?php
                                        $year = date('Y')+543;
                                        //++ year
                                        for($i=$year-19;$i<$year;$i++) {
                                            if($i == $year) {
                                                echo '<option value="'.$i.'" selected>'.$i.'</option>';
                                            } else {
                                                echo '<option value="'.$i.'">'.$i.'</option>';		
                                            }
                                        }
                                    ?>
                                </select>                       
                            </div> 
                        </div>
                    </div>    
                    <label class="col-md-2 col-form-label" for="text-input"><b>หลักสูตร</b></label>
                  <div class="col-md-4">                          
                    <div id="custom-search-input"> 
                        <div class="input-group col-md-12">     
                        <select id="Stat_Course" name="Stat_Course" class="form-control">
                           
                        </select>   
                            </div> 
                        </div>
                    </div>                        
                </div>              
                </div>
              </div>
          </div>
         <BR>
</Body>