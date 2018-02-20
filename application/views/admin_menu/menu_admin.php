
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
 <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="http://reg.buu.ac.th/registrar/getstudentimage.asp?id=<?php echo $this->session->userdata('user_id');?>" alt="..." class="img-fluid rounded-circle"></div>
                <div class="title" style="margin: 0 auto;">
                <h1 class="h5"> <?php echo $admin['Admin_NameTH'] ?> <?php echo $admin['Admin_LNameTH'] ?> </h1>
                <p> <?php echo $admin['Admin_Email'] ?> </p>
                </div>
         </div>
          <!-- Sidebar Navidation Menus-->
          <ul class="list-unstyled">
                    <li><a href="activity_student_admin"><i class="fa fa-tasks"></i> ข้อมูลกิจกรรม </a></li>
                    <li><a href="award_student_admin"><i class="fa fa-trophy"></i> รางวัลการแข่งขันนิสิต </a></li>
                    <li><a href="#exampledropdownDropdown1" aria-expanded="false" data-toggle="collapse"> 
	                    <i class="fas fa-database"></i> ข้อมูลสถิติ </a>
		                    <ul id="exampledropdownDropdown1" class="collapse list-unstyled ">
                                <li><a href="http://reg.buu.ac.th/document/CurrStu/CurrStu31012561_2_2560.pdf"> สถิติจำนวนนิสิต </a></li>
                                <li><a href="consider_student_admin"> รายชื่อรอพินิจ </a></li>
		                    </ul>
                    </li>
                    <li><a href="#exampledropdownDropdown2" aria-expanded="false" data-toggle="collapse"> 
	                    <i class="far fa-address-book"></i> ข้อมูลนิสิต </a>
		                    <ul id="exampledropdownDropdown2" class="collapse list-unstyled ">
                                <li><a href="data_student_admin"> ข้อมูลส่วนตัวนิสิต </a></li>
		                    </ul>
                    </li>
                    <li><a href="#exampledropdownDropdown3" aria-expanded="false" data-toggle="collapse"> 
                      <i class="far fa-plus-square"></i> เพิ่มข้อมูลเข้าสู่ระบบ </a>
		                    <ul id="exampledropdownDropdown3" class="collapse list-unstyled ">
                                <li><a href="#"> นิสิต </a></li>
                                <li><a href="#"> อาจารย์ </a></li>
		                    </ul>
                    </li>
                    <li><a href="http://reg.buu.ac.th/registrar/GRADUATE_DATE.asp?acadyear=2552&facultyid=34"><i class="fa fa-graduation-cap"></i> ผู้สำเร็จการศึกษา </a></li>
                    
          </ul>
        </nav>
   
