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
                <form  method="get"  action="http://reg.buu.ac.th/registrar/GRADUATE_DATE.asp" target="iframe_target" id="reg" >
                <div class="container">
                    <div class="row">
                        <div class="col-md-6"><BR>
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label" for="text-input"><b>ปีการศึกษา</b></label>
                                    <div class="col-md-3">                          
                                        <div id="custom-search-input"> 
                                            <div class="input-group col-md-15">     
                                                    <select class="form-control" name="acadyear" onchange="open_iframe_Box()">
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
                                                    <input type="hidden" name="facultyid" value="34" >
                                                </div> 
                                            </div>
                                        </div>                       
                                    </div>
                                </div>
                            </div>
                        </div>
                <div class="collapse" id="open_collapse">
                    <div class="card-body">
                        <div style="width:100%; height:100%; background-color:#cccccc;">ผู้สำเร็จการศึกษาของคณะวิทยาการสารสนเทศ</div><br>
                            <iframe id="iframe_target" name="iframe_target" style="width:100%; height:900px;" frameborder="0"></iframe>
                    </div>  
                </div>
        </form>
        
        
</Body>
<script>
function open_iframe_Box() {
    $('#reg').submit()
    $('#open_collapse').collapse()
}
</script>