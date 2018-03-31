
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
 <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="http://reg.buu.ac.th/registrar/getstudentimage.asp?id=<?php echo $this->session->userdata('user_id');?>" alt="..." class="img-fluid rounded-circle"></div>
                <div class="title" style="margin: 0 auto;">
                <h1 class="h5"> <?php echo $admin['Staff_Name'] ?> </h1>
                </div>
         </div>
          <!-- Sidebar Navidation Menus-->
          <ul class="list-unstyled">
                    <li><a href="/admin/c_admin/activity_student"><i class="fa fa-tasks"></i> ข้อมูลกิจกรรม </a></li>
                    <li><a href="/admin/c_admin/award_student_admin"><i class="fa fa-trophy"></i> รางวัลการแข่งขันนิสิต </a></li>
                    <li><a href="/admin/c_admin/scholarship_student_admin"><i class="far fa-money-bill-alt"></i> ทุนการศึกษา </a></li>
                    <li><a href="#exampledropdownDropdown1" aria-expanded="false" data-toggle="collapse"> 
	                    <i class="fas fa-database"></i> ข้อมูลสถิติ </a>
		                    <ul id="exampledropdownDropdown1" class="collapse list-unstyled ">
                                <li><a href="/admin/c_admin/statistics_admin"> สถิติจำนวนนิสิต </a></li>
                                <li><a href="/admin/c_admin/consider_student_admin"> รายชื่อรอพินิจ </a></li>
		                    </ul>
                    </li>
                    <li><a href="#exampledropdownDropdown2" aria-expanded="false" data-toggle="collapse"> 
	                    <i class="far fa-address-book"></i> ข้อมูลนิสิต </a>
		                    <ul id="exampledropdownDropdown2" class="collapse list-unstyled ">
                                <li><a href="/admin/c_admin/data_student_admin"> ข้อมูลส่วนตัวนิสิต </a></li>
		                    </ul>
                    </li>
                    <li><a href="#exampledropdownDropdown3" aria-expanded="false" data-toggle="collapse"> 
                      <i class="far fa-plus-square"></i> เพิ่มข้อมูล</a>
		                    <ul id="exampledropdownDropdown3" class="collapse list-unstyled ">
                                <li><a href="/admin/c_admin/add_aboutstudent"> ข้อมูลนิสิต </a></li>
                                <li><a href="/admin/c_admin/add_registstudent"> ข้อมูลการลงทะเบียน </a></li>
                                <li><a href="/admin/c_admin/add_gradstudent"> ข้อมูลเกรดเฉลี่ยแต่ละภาคเรียน </a></li>
		                    </ul>
                    </li>
                    <li><a href="/admin/c_admin/graduate_actoradmin"><i class="fa fa-graduation-cap"></i> ผู้สำเร็จการศึกษา </a></li>
          </ul>
        </nav>
   
