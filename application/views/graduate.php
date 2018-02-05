        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h1 class="no-margin-bottom"><center>ผู้สำเร็จการศึกษา</center></h1>
            </div>
          </header>
          <br>

          <div class="container-fluid">
              <h2 class="no-margin-bottom">คณะวิทยาการสารสนเทศ</h2>
          </div>
          <br>
          <br>
          <div class="container-fluid">
            <form class="form-horizontal">
              <fieldset>
              <!-- Select Basic -->
              <div class="row">
                <div class="form-group">
                   <label class="col-md-12 control-label" for="selectbasic">ปีการศึกษา</label> 
                </div>
             
                <!-- select -->
                <div class="form-group">
                <form id='statistics' method='post'>
                    <div class="col-md-12">
                    <select id="selectbasic" name="selectbasic" class="form-control" placeholder="ปีการศึกษา"> 
                      <option value="1">2557</option>
                      <option value="2">2558</option>
                      <option value="3">2559</option>
                    </select>
                    </div>
                  </div>
                <!-- Button -->
                <div class="form-group">
                    <div class="col-md-4">
                      <button id="Yes" name="Yes" class="btn btn-default"><a href="<?php echo site_url('/welcome/graduate_check');?>">ตกลง</a></li></button> 
                    </div>   
                </div>   
                </form>     
                </div>