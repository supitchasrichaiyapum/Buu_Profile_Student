
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
                    <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> 
	                    <i class="far fa-user"></i> ข้อมูลเจ้าหน้าที่ </a>
		                    <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                                <li><a href="data_admin"> ข้อมูลส่วนตัว </a></li>
                                <li><a href="edit_admin"> แก้ไขข้อมูล </a></li>
		                    </ul>
                    </li>
                    <li><a href="<?php echo site_url('#');?>"><i class="fa fa-tasks"></i> ข้อมูลกิจกรรม </a></li>
                    <li><a href="<?php echo site_url('#');?>"><i class="fa fa-id-card"></i> ข้อมูลสหกิจ </a></li>
                    <li><a href="#exampledropdownDropdown1" aria-expanded="false" data-toggle="collapse"> 
	                    <i class="fas fa-database"></i> ข้อมูลสถิติ </a>
		                    <ul id="exampledropdownDropdown1" class="collapse list-unstyled ">
                                <li><a href="#"> สถิติจำนวนนิสิต </a></li>
                                <li><a href="#"> รายชื่อรอพินิจ </a></li>
                                <li><a href="#"> ผู้สำเร็จการศึกษา </a></li>
		                    </ul>
                    </li>
                    <li><a href="#exampledropdownDropdown2" aria-expanded="false" data-toggle="collapse"> 
	                    <i class="far fa-address-book"></i> ข้อมูลนิสิต </a>
		                    <ul id="exampledropdownDropdown2" class="collapse list-unstyled ">
                                <li><a href="#"> ข้อมูลส่วนตัวนิสิต </a></li>
                                <li><a href="#"> แก้ไขข้อมูลส่วนตัวนิสิต </a></li>
		                    </ul>
                    </li>
          </ul>
        </nav>
   
