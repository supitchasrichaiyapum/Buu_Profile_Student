
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="http://reg.buu.ac.th/registrar/getstudentimage.asp?id=<?php echo $this->session->userdata('user_id');?>" alt="..." class="img-fluid rounded-circle"></div>
                <div class="title" style="margin: 0 auto;">
                    <h1 class="h5"> <?php echo $student['Student_NameTH'] ?> <?php echo $student['Student_LNameTH'] ?> </h1>
                        <p> <?php echo $student['Student_ID'] ?> </p>
                </div>
         </div>
          <!-- Sidebar Navidation Menus-->
          <ul class="list-unstyled">
                    <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> 
	                    <i class="icon-interface-windows"></i> ข้อมูลนิสิต </a>
		                    <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                                <li><a href="data_student"> ข้อมูลส่วนตัว </a></li>
                                <li><a href="edit_student"> แก้ไขข้อมูลส่วนตัว </a></li>
                                <li><a href="transcript_student"> ผลการศึกษา </a></li>
		                    </ul>
                    </li>
                    <li><a href="activity_student"><i class="fa fa-tasks"></i> ข้อมูลกิจกรรม </a></li>
                    <li><a href="award_student"><i class="fa fa-trophy"></i> รางวัลการแข่งขัน </a></li>
                    <li><a href="#exampledropdownDropdown1" aria-expanded="false" data-toggle="collapse"> 
	                    <i class="fas fa-database"></i> ข้อมูลสถิติ </a>
		                    <ul id="exampledropdownDropdown1" class="collapse list-unstyled">
                                <li><a href="http://reg.buu.ac.th/document/CurrStu/CurrStu31012561_2_2560.pdf"> สถิติจำนวนนิสิต </a></li>
                                <li><a href="consider_teacher"> รายชื่อรอพินิจ </a></li>
                                </ul>
                    </li>
                    <li><a href="graduate_actorstudent"><i class="fa fa-graduation-cap"></i> ผู้สำเร็จการศึกษา </a></li>
          </ul>
        </nav>
