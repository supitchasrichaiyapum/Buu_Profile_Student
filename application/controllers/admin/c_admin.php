<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class c_admin extends CI_Controller {
	public function __construct()
    {
		parent::__construct();
		if($this->session->userdata('user_id') == ''){
			redirect('c_login/login');
			die();
		}
		
		if($this->session->userdata('actor') == 'Student') {
			redirect('student/c_student/menu_student');
			die();
		} else if($this->session->userdata('actor') == 'Teacher') {
			redirect('teacher/c_teacher/menu_teacher');
			die();
		}
		
    }
    public function index()
    {
		$data['user_id'] = $this->session->userdata('user_id');
		$this->template->view('template/main_view',$data);
    }
    public function menu_admin()
	{
		$data['user_id'] = $this->session->userdata('user_id');
		$data['admin'] = $this->m_admin->get_admin($data['user_id']);
		$this->template->view('template/main_view',$data);
		
	}
	public function data_admin()
	{
		$data['user_id'] = $this->session->userdata('user_id');
		$data['admin'] = $this->m_admin->get_admin($data['user_id']);
		$this->template->view('admin/data_admin',$data);
	}
	
	// เพิ่มข้อมูลรางวัล
	public function insert_form_award()
	{
		$data['user_id'] = $this->session->userdata('user_id');
		$data['admin'] = $this->m_admin->get_admin($data['user_id']);
		// $this->load->model(m_award);
		// $this->m_award->insert_award();	
		// print_r($data);
		$this->template->view('admin/add_award_student',$data);
	}
	// เพิ่มข้อมูลรางวัล
	public function insert_award()
	{
		$data['Award_Name'] = $this->input->post('Award_Name');
		$data['Award_Term'] = $this->input->post('Award_Term');
		$data['Award_Year'] = $this->input->post('Award_Year');
		$data['Award_Giver'] = $this->input->post('Award_Giver');
		$data['Award_Amount'] = $this->input->post('Award_Amount');
		
		$this->load->model('m_award');
		$this->m_award->insert_award($data);
		redirect('admin/c_admin/award_student_admin');
	}
	// เพิ่มนิสิตในรางวัลการแข่งขัน
	public function insert_form_student_award($award_id)
	{
		$data['award_id'] = $award_id;
		$data['user_id'] = $this->session->userdata('user_id');
		$data['admin'] = $this->m_admin->get_admin($data['user_id']);
		// $this->load->model(m_award);
		// $this->m_award->insert_award();	
		// print_r($data);
		$this->template->view('admin/add_award_student_admin',$data);
	}
	// เพิ่มรายชื่อนิสิตในรางวัลการแข่งขัน
	public function insert_student_award()
	{
		$award_id = $this->input->post('Award_ID');
		$data['Award_ID'] = $this->input->post('Award_ID');
		$data['Award_Date'] = $this->input->post('Award_Date');
		$data['Student_ID'] = $this->input->post('Student_ID');
		
		$this->load->model('m_award');
		$this->m_award->insert_student_award($data);
		redirect('admin/c_admin/award_detail/'.$award_id);
	}
	// ลบนิสิตรางวัลการแข่งขัน
	public function delete_award_has_student(){
		// print_r($_POST);
		$award_id = $this->input->post('Award_ID');
		$student_id = $this->input->post('Student_ID');
		$this->load->model('m_award');
		$this->m_award->delete_award_has_student($student_id);
		redirect('admin/c_admin/award_detail/'.$award_id);
	}

	// รายชื่อรางวัลการแข่งขัน
	public function award_student_admin()
	{
		$this->load->model('m_award');
		$data['user_id'] = $this->session->userdata('user_id');
		$data['admin'] = $this->m_admin->get_admin($data['user_id']);
		$data['result'] = $this->m_award->get_all_award();
		$data['result1'] = $this->m_award->get_by_id_award_has_student($data['result']);
		// print_r($data);
		$this->template->view('admin/award_student_admin',$data);
	}
	// รายชื่อนิสิตในรางวัลนั้นๆ
	public function award_detail($id)
	{
		$data['award_id'] = $id;
		// print_r($id);
		$this->load->model('m_award');
		$data['user_id'] = $this->session->userdata('user_id');
		$data['admin'] = $this->m_admin->get_admin($data['user_id']);
		$data['result1'] = $this->m_award->get_Award_by_id($id);
		// print_r($data);
		$this->template->view('admin/award_detail',$data);
	}
	// แก้ไขรายชื่อรางวัลการแข่งขัน
	public function form_editaward_student_admin($award_id) 
	{
		// print_r($award_id);
		$this->load->model('m_award');
		$data['user_id'] = $this->session->userdata('user_id');
		$data['admin'] = $this->m_admin->get_admin($data['user_id']);
		$data['result'] = $this->m_award->get_by_id($award_id);
		// print_r($data);
		// $this->load->model('m_award');
		// $this->m_award->update_award($data);
		// redirect('admin/c_admin/award_student_admin');
		
		// return true;
		$this->template->view('admin/editaward_student_admin',$data);
	}
	// แก้ไขรายชื่อรางวัลการแข่งขัน
	public function editaward_student_admin($award_id) 
	{
		// print_r($_POST);
		$data['Award_Name'] = $this->input->post('Award_Name');
		$data['Award_Term'] = $this->input->post('Award_Term');
		$data['Award_Year'] = $this->input->post('Award_Year');
		$data['Award_Giver'] = $this->input->post('Award_Giver');
		$data['Award_Amount'] = $this->input->post('Award_Amount');
		// print_r($data);
		$this->load->model('m_award');
		$this->m_award->update_award($data, $award_id);
		
		
		redirect('admin/c_admin/award_student_admin/'.$award_id);
	}
	public function statistics_student_admin()
	{
		$data['user_id'] = $this->session->userdata('user_id');
		$data['admin'] = $this->m_admin->get_admin($data['user_id']);
		$this->template->view('admin/statistics_student_admin',$data);
	}
	
	public function consider_student_admin()
	{
		$data['user_id'] = $this->session->userdata('user_id');
		$data['admin'] = $this->m_admin->get_admin($data['user_id']);
		$this->template->view('admin/consider_student_admin',$data);
	}
	public function graduate_student_admin()
	{
		$data['user_id'] = $this->session->userdata('user_id');
		$data['admin'] = $this->m_admin->get_admin($data['user_id']);
		$this->template->view('admin/graduate_student_admin',$data);
	}
	public function data_student_admin()
	{
		$data['user_id'] = $this->session->userdata('user_id');
		$data['admin'] = $this->m_admin->get_admin($data['user_id']);
		$data['student_code'] = $this->input->get('textfield');
		if($data['student_code']) {
			$this->load->model('m_admin');
			$data['result'] = $this->m_admin->search_studemt($data['student_code']);
		} else {
			$data['result'] = array();
		}
		$this->template->view('admin/data_student_admin',$data);
	}
	public function editdata_student_admin()
	{
		$data['user_id'] = $this->session->userdata('user_id');
		$data['admin'] = $this->m_admin->get_admin($data['user_id']);
		$this->template->view('admin/editdata_student_admin',$data);
    }
    public function add_student()
    {
        $data['user_id'] = $this->session->userdata('user_id');
		$data['admin'] = $this->m_admin->get_admin($data['user_id']);
		$this->template->view('admin/add_student',$data);
    }
	public function activity_edit_student()
		{
			$data['user_id'] = $this->session->userdata('user_id');
			$data['admin'] = $this->m_admin->get_admin($data['user_id']);
			$this->template->view('admin/activity_edit_student',$data);
		}
	
	public function scholarship_edit_admin()
		{
			$data['user_id'] = $this->session->userdata('user_id');
			$data['admin'] = $this->m_admin->get_admin($data['user_id']);
			$this->template->view('admin/scholarship_edit_admin',$data);
		}
	public function add_scholarship_student()
		{
			$data['user_id'] = $this->session->userdata('user_id');
			$data['admin'] = $this->m_admin->get_admin($data['user_id']);
			$this->template->view('admin/add_scholarship_student',$data);
		}
	// เช็คสถานะการอัพข้อมูลส่วนตัว
	public function add_aboutstudent($status= '')
		{
			$data['status'] = array();
			if($status == 'error'){
				$data['status']['color'] = "danger";
				$data['status']['text'] = "กรุณาเลือกไฟล์ใหม่";
			} else if($status == 'success'){
				$data['status']['color'] = "success";
				$data['status']['text'] = "สำเร็จ !";
			}
			$data['user_id'] = $this->session->userdata('user_id');
			$data['admin'] = $this->m_admin->get_admin($data['user_id']);
			$this->template->view('admin/add_aboutstudent',$data);
		}
	// อัพข้อมูลส่วนตัว
	public function post_aboutstudent()
		{
			
			$config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'xlsx';
            $config['max_size']             = (1024*8);
            $config['encrypt_name'] 		= true;
            $this->load->library('upload', $config);
            $config['encrypt_name'] = true;
			$this->load->library('upload', $config);
			
            if ( ! $this->upload->do_upload('file-input')) {	
				$this->add_aboutstudent('error');
            } else {
				//get upload file
				$file = $this->upload->data();
				//read excel file
				require(FCPATH.'/application/libraries/XLSXReader.php');
                $xlsx = new XLSXReader($file['full_path']);
                $sheet = $xlsx->getSheetNames()[1];
                foreach($xlsx->getSheetData($sheet) as $key => $row) {
					if($key == 0) 
						continue;
					//date converted
					$row[13] = XLSXReader::toUnixTimeStamp($row[13]);
					// var_dump($row);
					//gen faculty
					if($faculty = $this->m_admin->search_faculty($row[8])) {
						//found
						$Branch_ID = $faculty[0]['Branch_ID'];
					} else {
						//add new
						$array['Branch'] = $row[8];
						$Branch_ID = $this->m_admin->insert_faculty($array);
					}
					$insert = array();
					$insert['Branch_ID'] = $Branch_ID;
					$insert['Teacher_ID'] = 'none';					
					$insert['Student_IdNum'] = $row[1];
					$insert['MrMs'] = $row[2];
					$insert['Student_NameTH'] = $row[3];
					$insert['Student_LNameTH'] = $row[4];
					$insert['Student_NameEng'] = $row[5];
					$insert['Student_LNameENG'] = $row[6];
					$insert['Campus'] = $row[7];
					$insert['Course'] = $row[8];
					$insert['Level'] = $row[9];
					$insert['Entry_Years'] = $row[10];
					$insert['Entry_Method'] = $row[11];
					$insert['Status_ID'] = $row[12];
					$insert['Birthday'] = date('Y-m-d', $row[13]);
					$insert['GradFromSchool'] = $row[14];
					$insert['HighesEd'] = $row[15];
					$insert['ProvinceofBirth'] = $row[16];
					$insert['Notionnalitu'] = $row[17];
					$insert['Relidion'] = $row[18];
					$insert['Father_Name'] = $row[19];
					$insert['Parent_Status'] = $row[20];
					$insert['Mother_Name'] = $row[22];
					$insert['Parent_Name'] = $row[23];
					$insert['Contact_Name'] = $row[24];
					$insert['Homeaddress_Number'] = $row[25];
					$insert['Homeaddress_Moo'] = $row[26];
					$insert['Homeaddress_Soi'] = $row[27];
					$insert['Homeaddress_Tumbon'] = $row[28];
					$insert['Homeaddress_Aumper'] = $row[29];
					$insert['Homeaddress_Province'] = $row[30];
					$insert['Homeaddress_Postcode'] = $row[31];
					$insert['Parentaddress_Number'] = $row[32];
					$insert['Parentaddress_Moo'] = $row[33];
					$insert['Parentaddress_Soi'] = $row[34];
					$insert['Parentaddress_Tumbon'] = $row[35];
					$insert['Parentaddress_Aumper'] = $row[36];
					$insert['Parentaddress_Province'] = $row[37];
					$insert['Parentaddress_Postcode'] = $row[38];
					$insert['Contactaddress_Number'] = $row[39];
					$insert['Contactaddress_Tumbon'] = $row[40];
					$insert['Contactaddress_Aumper'] = $row[41];
					$insert['Contactaddress_Province'] = $row[42];
					$insert['Contactaddress_Postcode'] = $row[43];
					$insert['Blood'] = $row[44];
					$insert['Degree'] = $row[45];
					// print_r($row);
					// print_r($insert);
					// echo "<br><br>";		
					if($this->m_student->search_student($row[0])) {
						//found
						$this->m_student->update_student($row[0], $insert);
					} else {
						//add new
						$insert['Student_ID'] = $row[0];						
						$this->m_student->add_student($insert);
					}
					
				}
				$this->add_aboutstudent('success');
				// redirect ('admin/c_admin/add_registstudent');
				//insert
			}
		}
	// เช็คสถานะการอัพข้อมูลการลงทะเบียน
	public function add_registstudent($status= '')
		{
			$data['status'] = array();
			if($status == 'error'){
				$data['status']['color'] = "danger";
				$data['status']['text'] = "กรุณาเลือกไฟล์ใหม่";
			} else if($status == 'success'){
				$data['status']['color'] = "success";
				$data['status']['text'] = "สำเร็จ !";
			}
			$data['user_id'] = $this->session->userdata('user_id');
			$data['admin'] = $this->m_admin->get_admin($data['user_id']);
			$this->template->view('admin/add_registstudent',$data);
		}
	// อัพข้อมูลการลงทะเบียน
	public function post_registstudent()
		{
			
			$config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'xlsx';
            $config['max_size']             = (1024*8);
            $config['encrypt_name'] = true;
            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('file-input')) {
                $this->add_registstudent('error');
                // die('111');
            } else {
				//get upload file
				$file = $this->upload->data();
				
				//read excel file
				require(FCPATH.'/application/libraries/XLSXReader.php');
                $xlsx = new XLSXReader($file['full_path']);
                $sheet = $xlsx->getSheetNames()[1];
                foreach($xlsx->getSheetData($sheet) as $key => $row) {
					if($key == 0)
						continue;
					// print_r($row);
					// continue;
					if(!$this->m_student->search_subject($row[1])) {
						$array['Subject_Code'] = $row[1];
						$array['Subject_Name'] = $row[2];
						$this->m_student->insert_subject($array);
					}
					$insert = array();
					$insert['Subject_Code'] = $row[1];
					$insert['Student_ID'] = $row[0];
					$insert['Term_Number'] = $row[6];
					$insert['Subject_Credit'] = $row[3];
					$insert['Grade'] = $row[4];
					$insert['Subject_Year'] = $row[5];
					
					
					// var_dump($insert);
					// print_r($insert);
					// echo "<br><br>";				
					if($this->m_student->search_registstudent($insert)) {
						//found
						$this->m_student->update_registstudent($insert);
					} else {
						//add new
						$this->m_student->add_registstudent($insert);
					}
				}
				$this->add_registstudent('success');
				// redirect ('admin/c_admin/add_gradstudent');
				// insert
			}
		}
	// เช็คสถานะการอัพข้อมูลเกรดเฉลี่ย
	public function add_gradstudent($status= '')
		{
			$data['status'] = array();
			if($status == 'error'){
				$data['status']['color'] = "danger";
				$data['status']['text'] = "กรุณาเลือกไฟล์ใหม่";
			} else if($status == 'success'){
				$data['status']['color'] = "success";
				$data['status']['text'] = "สำเร็จ !";
			}
			$data['user_id'] = $this->session->userdata('user_id');
			$data['admin'] = $this->m_admin->get_admin($data['user_id']);
			$this->template->view('admin/add_gradstudent',$data);
		}
	// เช็คสถานะการอัพข้อมูลเกรดเฉลี่ย
	public function post_gradstudent()
		{
			
			
			$config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'xlsx';
            $config['max_size']             = (1024*8);
            $config['encrypt_name'] 		= true;
            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('file-input')) {
                $this->add_gradstudent('error');
                // die('111');
            } else {
				//get upload file
				$file = $this->upload->data();
				
				//read excel file
				require(FCPATH.'/application/libraries/XLSXReader.php');
                $xlsx = new XLSXReader($file['full_path']);
                $sheet = $xlsx->getSheetNames()[1];
                foreach($xlsx->getSheetData($sheet) as $key => $row) {

					if($key == 0 )
						continue;
						
					$insert = array();
					$insert['Student_ID'] = $row[0];
					$insert['GPA_Year'] = $row[1];
					$insert['GPA_Term'] = $row[2];
					$insert['CA'] = $row[3];
					$insert['GPA'] = $row[4];
					
					//var_dump($insert);
					//print_r($insert);
					// echo "<br><br>";				
					if($this->m_student->search_gradstudent($insert)) {
						//found
						$this->m_student->update_gradstudent($insert);
					} else {
						//add new
						$this->m_student->add_gradstudent($insert);
					}
				}
				$this->add_gradstudent('success');
				//insert
			}
		}
		public function insert(){
		   $this->load->model(m_award);
		   $this->m_award->insert();
		   redirect('admin/c_admin/award_student_admin');
        }

		
		public function update(){
			
			$data['user_id'] = $this->session->userdata('user_id');
			$data['admin'] = $this->m_admin->get_admin($data['user_id']);
			if($this->input->post('submit') != null){
				$id = $this->input->post('Award_ID');
				$this->load->model('m_award');
				$this->m_award->update($id);
				redirect('admin/c_admin/award_student_admin');
			}else{
				$id = $this->uri->segment(3);
				$this->load->model("m_award");
				$data['query'] = $this->m_award->get_by_id($id);
				$this->template->view('admin/editaward_student_admin',$data);
			}
		}
	// 	public function editaward_student_admin() //ยังแก้ไขไม่ได้
	// {
	// 	$this->load->model('m_award');
	// 	$data['user_id'] = $this->session->userdata('user_id');
	// 	$data['admin'] = $this->m_admin->get_admin($data['user_id']);
	// 	$data['query'] = $this->m_award->get_all();
	// 	$this->template->view('admin/editaward_student_admin',$data);
	// }
	
		public function graduate_actoradmin()
		{
			$data['user_id'] = $this->session->userdata('user_id');
			$data['admin'] = $this->m_admin->get_admin($data['user_id']);
			$this->template->view('admin/graduate_actoradmin',$data);
		}
		// <-- ทุนการศึกษา -->
		// เพิ่มข้อมูลทุนการศึกษา
		public function insert_form_scholarship()
		{
			$data['user_id'] = $this->session->userdata('user_id');
			$data['admin'] = $this->m_admin->get_admin($data['user_id']);
			// print_r($data);
			$this->template->view('admin/add_scholarship_student',$data);
		}
		// เพิ่มข้อมูลทุนการศึกษา
		public function insert_scholarship()
		{
			$data['Scholarship_Name'] = $this->input->post('Scholarship_Name');
			$data['Scholarship_Giver'] = $this->input->post('Scholarship_Giver');
			$data['Scholarship_Amount'] = $this->input->post('Scholarship_Amount');

			$this->load->model('m_scholarship');
			$this->m_scholarship->insert_scholarship($data);
			redirect('admin/c_admin/scholarship_student_admin');
		}
		// เพิ่มนิสิตในทุนการศึกษา
		public function insert_form_student_scholarship($scholarship_id)
		{
			$data['scholarship_id'] = $scholarship_id;
			$data['user_id'] = $this->session->userdata('user_id');
			$data['admin'] = $this->m_admin->get_admin($data['user_id']);
			// $this->load->model(m_scholarship);
			// $this->m_scholarship->insert_scholarship();	
			// print_r($data);
			$this->template->view('admin/add_scholarship_detail',$data);
		}
		// เพิ่มรายชื่อนิสิตในทุนการศึกษา
		public function insert_student_scholarship()
		{
			$scholarship_id = $this->input->post('Scholarship_ID');
			$data['Scholarship_ID'] = $this->input->post('Scholarship_ID');
			$data['Scholarship_Date'] = $this->input->post('Scholarship_Date');
			$data['Student_ID'] = $this->input->post('Student_ID');
			
			$this->load->model('m_scholarship');
			$this->m_scholarship->insert_student_scholarship($data);
			redirect('admin/c_admin/scholarship_detail/'.$scholarship_id);
		}
		// ลบนิสิตทุนการศึกษาar
		public function delete_scholarship_has_scholarship($scholarship_id){
			// print_r($_POST);
			// print_r($scholarship_id);
			$student_id = $this->input->post('Student_ID');
			$this->load->model('m_scholarship');
			$this->m_scholarship->delete_scholarship_has_student($student_id);
			redirect('admin/c_admin/scholarship_detail/'.$scholarship_id);
		}

		// รายชื่อทุนการศึกษา
		public function scholarship_student_admin()
		{
			$this->load->model('m_scholarship');
			$data['user_id'] = $this->session->userdata('user_id');
			$data['admin'] = $this->m_admin->get_admin($data['user_id']);
			$data['result'] = $this->m_scholarship->get_all_scholarship();
			$data['result1'] = $this->m_scholarship->get_by_id_scholarship_has_student($data['result']);
			// print_r($data);
			$this->template->view('admin/scholarship_student_admin',$data);
		}
		// รายชื่อนิสิตในทุนการศึกษา
		public function scholarship_detail($id)
		{
		$data['scholarship_id'] = $id;
		// print_r($id);
		$this->load->model('m_scholarship');
		$data['user_id'] = $this->session->userdata('user_id');
		$data['admin'] = $this->m_admin->get_admin($data['user_id']);
		$data['result1'] = $this->m_scholarship->get_Scholarship_by_id($id);
		// print_r($data);
		$this->template->view('admin/scholarship_detail',$data);
		}
		// แก้ไขรายชื่อทุนการศึกษา
		public function form_editscholarship_student_admin($scholarship_id) 
		{
			// print_r($scholarship_id);
			$this->load->model('m_scholarship');
			$data['user_id'] = $this->session->userdata('user_id');
			$data['admin'] = $this->m_admin->get_admin($data['user_id']);
			$data['result'] = $this->m_scholarship->get_by_id($scholarship_id);
			// print_r($data);
			
			
			// return true;
			$this->template->view('admin/edit_scholarship',$data);
		}
		// แก้ไขรายชื่อทุนการศึกษา
		public function editscholarship_student_admin($scholarship_id) 
		{
			// print_r($_POST);
			$data['Scholarship_Name'] = $this->input->post('Scholarship_ID');
			$data['Scholarship_Giver'] = $this->input->post('Scholarship_Giver');
			$data['Scholarship_Amount'] = $this->input->post('Scholarship_Amount');
			// print_r($data);
			$this->load->model('m_scholarship');
			$this->m_scholarship->update_scholarship($data, $scholarship_id);
			
			
			redirect('admin/c_admin/scholarship_student_admin/'.$scholarship_id);
		}

		// เพิ่มกิจกรรม
		public function insert_form_activity()
		{
			$data['user_id'] = $this->session->userdata('user_id');
			$data['admin'] = $this->m_admin->get_admin($data['user_id']);
			// print_r($data);
			$this->template->view('admin/add_activity',$data);
		}
		// เพิ่มกิจกรรม
		public function insert_activity()
		{
			$data['Activitie_Name'] = $this->input->post('Activitie_Name');
			$data['Activity_Term'] = $this->input->post('Activity_Term');
			$data['Activity_Year'] = $this->input->post('Activity_Year');
			$data['Hour'] = $this->input->post('Hour');
			
			$this->load->model('m_activity');
			$this->m_activity->insert_activity($data);
			redirect('admin/c_admin/activity_student_admin');
		}
		// เพิ่มนิสิตในกิจกรรม
		public function insert_form_student_activity($activity_id)
		{
			$data['activity_id'] = $activity_id;
			$data['user_id'] = $this->session->userdata('user_id');
			$data['admin'] = $this->m_admin->get_admin($data['user_id']);
			// print_r($data);
			$this->template->view('admin/add_activity_student',$data);
		}
		// เพิ่มรายชื่อนิสิตในกิจกรรม
		public function insert_student_activity()
		{
			$activity_id = $this->input->post('Activity_Activitie_ID');
			$data['Activity_Activitie_ID'] = $this->input->post('Activity_Activitie_ID');
			$data['Student_Student_ID'] = $this->input->post('Student_Student_ID');
			
			$this->load->model('m_activity');
			$this->m_activity->insert_student_activity($data);
			redirect('admin/c_admin/activity_detail/'.$activity_id);
		}
		// ลบนิสิตกิจกรรม
		public function delete_activity_has_student(){
			// print_r($_POST);
			$activity_id = $this->input->post('Activitie_ID');
			$student_id = $this->input->post('Student_ID');
			$this->load->model('m_activity');
			$this->m_activity->delete_activity_has_student($student_id);
			redirect('admin/c_admin/activity_detail/'.$activity_id);
		}

		// รายชื่อกิจกรรม
		public function activity_student()
		{
			$this->load->model('m_activity');
			$data['user_id'] = $this->session->userdata('user_id');
			$data['admin'] = $this->m_admin->get_admin($data['user_id']);
			$data['result'] = $this->m_activity->get_all_activity();
			$data['result1'] = $this->m_activity->get_by_id_activity_has_student($data['result']);
			// print_r($data);
			$this->template->view('admin/activity_student_admin',$data);
		}
		// รายชื่อนิสิตในกิจกรรม
		public function activity_detail($id)
		{
			$data['activity_id'] = $id;
			// print_r($id);
			$this->load->model('m_activity');
			$data['user_id'] = $this->session->userdata('user_id');
			$data['admin'] = $this->m_admin->get_admin($data['user_id']);
			$data['result1'] = $this->m_activity->get_activity_by_id($id);
			// print_r($data);
			$this->template->view('admin/activity_detail',$data);
		}
		// แก้ไขรายชื่อกิจกรรม
		public function form_editactivity_student_admin($activity_id) 
		{
			// print_r($activity_id);
			$this->load->model('m_activity');
			$data['user_id'] = $this->session->userdata('user_id');
			$data['admin'] = $this->m_admin->get_admin($data['user_id']);
			$data['result'] = $this->m_activity->get_by_id($activity_id);
			// print_r($data);			
			// return true;
			$this->template->view('admin/edit_activity_student',$data);
		}
		// แก้ไขรายชื่อกิจกรรม
		public function editactivity_student_admin($activity_id) 
		{
			// print_r($_POST);
			$data['Activitie_Name'] = $this->input->post('Activitie_Name');
			$data['Activity_Term'] = $this->input->post('Activity_Term');
			$data['Activity_Year'] = $this->input->post('Activity_Year');
			$data['Hour'] = $this->input->post('Hour');
			
			// print_r($data);
			$this->load->model('m_activity');
			$this->m_activity->update_activity($data, $activity_id);
			
			
			redirect('admin/c_admin/activity_student/'.$activity_id);
		}


	}
?>