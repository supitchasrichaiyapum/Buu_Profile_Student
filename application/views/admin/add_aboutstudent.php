<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!------ Include the above in your HEAD tag ---------->
<style>
  .stepwizard-step p {
      margin-top: 10px;
  }
  .stepwizard-row {
      display: table-row;
  }
  .stepwizard {
      display: table;
      width: 50%;
      position: relative;
  }
  .stepwizard-step button[disabled] {
      opacity: 1 !important;
      filter: alpha(opacity=100) !important;
  }
  .stepwizard-row:before {
      top: 14px;
      bottom: 0;
      position: absolute;
      content: " ";
      width: 100%;
      height: 1px;
      background-color: #ccc;
      z-order: 0;
  }
  .stepwizard-step {
      display: table-cell;
      text-align: center;
      position: relative;
  }
  .btn-circle {
      width: 30px;
      height: 30px;
      text-align: center;
      padding: 6px 0;
      font-size: 12px;
      line-height: 1.428571429;
      border-radius: 15px;
  }
</style>
<div class="content-inner">
</hearder>
<div class="container">
  <div class="card"><br>  
    <div class="stepwizard col-md-offset-3">
        <div class="stepwizard-row setup-panel">

          <div class="stepwizard-step">
            <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
            <p>เพิ่มข้อมูลส่วนตัว</p>
          </div>

          <div class="stepwizard-step">
            <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
            <p>เพิ่มข้อมูลการลงทะเบียน</p>
          </div>

          <div class="stepwizard-step">
            <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
            <p>เพิ่มเกรดเฉลี่ยแต่ละภาคเรียน</p>
          </div>

        </div>
    </div>


    
  
    <form role="form" action="<?php echo site_url('admin/c_admin/post_aboutstudent');?>" method="post" enctype="multipart/form-data">
    <div class="row setup-content" id="step-1">
      <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">


        <?php 
        if($status) {
          echo '<div class="alert alert-'.$status['color'].'" role="alert"> '.$status['text'].' </div>';
        } ?>
        


          <br>
          <div class="form-group">
            <div class="form-group row">
              <label class="col-md-3 col-form-label" for="text-input">เลือกไฟล์</label>
                <div class="col-md-9">
                  <input type="file" id="file-input" name="file-input" required="">
                  <br><button type="submit" class="btn btn-sm btn-success pull-right"> Submit</a></button>
                </div>
            </div>         
          </div>
      </div>
    </div>
    </div>
  </form>
  </div>
</div>
</div>
</div>
<script>
  $(document).ready(function () {
    var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
                $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-primary').addClass('btn-default');
            $item.addClass('btn-primary');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for(var i=0; i<curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid)
            nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-primary').trigger('click');
  });
</script>