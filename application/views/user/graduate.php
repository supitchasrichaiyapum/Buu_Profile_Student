<Body>
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
              <strong><center>ผู้สำเร็จการศึกษา</strong>
            </div>
            <div class="card-body">

        <form  method="get"  action="http://reg.buu.ac.th/registrar/GRADUATE_DATE.asp">
          <div class="container">
            <div class="row">
                <div class="col-md-6"><BR>
                    <h2>ปีการศึกษา</h2><BR>
                    <div id="custom-search-input">
                        <div class="input-group col-md-11">     
                        <form  method="get"  action="http://reg.buu.ac.th/registrar/GRADUATE_DATE.asp">                                      
                        <select name="acadyear" onchange="submit()">
                            <?php
                                $year = date('Y')+543;
                                //++ year
                                for($i=$year-10;$i<$year+3;$i++) {
                                    if($i == $year) {
                                        echo '<option value="'.$i.'" selected>'.$i.'</option>';
                                    } else {
                                        echo '<option value="'.$i.'">'.$i.'</option>';		
                                    }
                                }
                            ?>
                        </select>
                        <input type="hidden" name="facultyid" value="34">
                        </div>                        
                    </div>
                </div>
            </div>
          </div>
        </form>
</Body>