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
	public function activity_student_admin()
	{
		$data['user_id'] = $this->session->userdata('user_id');
		$data['admin'] = $this->m_admin->get_admin($data['user_id']);
		$this->template->view('admin/activity_student_admin',$data);
	}
	public function add_activity_student()
	{
		$data['user_id'] = $this->session->userdata('user_id');
		$data['admin'] = $this->m_admin->get_admin($data['user_id']);
		$this->template->view('admin/add_activity_student',$data);
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
		$data['Award_Date'] = $this->input->post('Award_Date');
		$data['Award_Course'] = $this->input->post('Award_Course');
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
		
		$this->template->view('admin/award_student_admin',$data);
	}
	// รายชื่อนิสิตในรางวัลนั้นๆ
	public function award_detail($id)
	{	
		
		$data['award_id'] = $id;
		$this->load->model('m_award');
		$data['user_id'] = $this->session->userdata('user_id');
		$data['admin'] = $this->m_admin->get_admin($data['user_id']);
		$data['result1'] = $this->m_award->get_Award_by_id($id);
		
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
	public function statistics_admin()
	{
		$data['user_id'] = $this->session->userdata('user_id');
		$data['admin'] = $this->m_admin->get_admin($data['user_id']);
		$data['data_text'] = $this->input->get('textfield');
		$data['static'] = $this->m_admin->static_student($years);
		$this->template->view('admin/statistics_admin',$data);
	}
	
	public function consider_student_admin()
	{
		$data['user_id'] = $this->session->userdata('user_id');
		$data['admin'] = $this->m_admin->get_admin($data['user_id']);
		if($this->input->post('consider')) { 
			if($this->input->post('consider') == 'high'){
			// โปรสูง
				$data['student'] = $this->m_admin->search_student_between_gpax(1.80, 1.99);
			} else {
				// โปรต่ำ
				$data['student'] = $this->m_admin->search_student_between_gpax(1.75, 1.79);
			}
		} else {
			$data['student'] = array();
		}

		$this->template->view('admin/consider_student_admin',$data);
	}

	public function graduate_student_admin()
	{
		$data['user_id'] = $this->session->userdata('user_id');
		$data['admin'] = $this->m_admin->get_admin($data['user_id']);
		$this->template->view('admin/graduate_student_admin',$data);
	}

	public function search_data_student_admin()
	{
		$data['user_id'] = $this->session->userdata('user_id');
		$data['admin'] = $this->m_admin->get_admin($data['user_id']);
		$data['Student_Text'] = $this->input->get('textfield');
		if($data['Student_Text']) {
			$data['Student_Text'] = str_replace("*", "%", $data['Student_Text']);
			$this->load->model('m_student');
			$data['result'] = $this->m_student->search_student($data['Student_Text']);
		} else {
			$data['result'] = array();
		}
		$this->template->view('admin/search_data_student_admin', $data);
	}

	public function data_student_detail_admin($id)
	{
		$data['user_id'] = $this->session->userdata('user_id');
		$data['admin'] = $this->m_admin->get_admin($data['user_id']);
		$data['student_id'] = $id;
		$data['result'] = $this->m_student->get_student($id);
		$data['scholarship'] = $this->m_scholarship->get_Scholarship_by_student($data['student_id']);
		$data['activity'] = $this->m_activity->get_by_student_id($data['student_id']);
		$data['award'] = $this->m_award->get_Award_by_student($data['student_id']);
		$data['status'] = $this->m_admin->search_student_status($data['student_id']);
		$data['GPA_Year'] = $this->m_student->get_GPA_Year($data['student_id']);
		$data['GPA'] = $this->m_student->get_GPA($data['student_id']);
		$this->template->view('admin/data_student_detail_admin',$data);
		
	}

	public function transcript_student_admin($student_code)
	{
		$data['user_id'] = $this->session->userdata('user_id');
		$data['admin'] = $this->m_admin->get_admin($data['user_id']);
		$this->load->model('m_student');
		$data['result'] = $this->m_student->get_student($student_code);
		$data['transcript'] = $this->m_student->get_transcript($student_code);
		$data['GPA'] = $this->m_student->get_GPA($student_code);
		$data['status'] = $this->m_admin->search_student_status($student_code);
		$data['transcript_rows'] = $this->m_student->get_year_transcript($student_code);
		$this->template->view('admin/transcript_student_admin',$data);
	}

	public function editdata_student_admin($student_code)
	{
		$data['user_id'] = $this->session->userdata('user_id');
		$data['admin'] = $this->m_admin->get_admin($data['user_id']);
		$this->load->model('m_student');
		$data['result'] = $this->m_student->get_student($student_code);
		$this->template->view('admin/editdata_student_admin',$data);
	}
	
	public function post_edit_student_admin($student_code)
	{
		// $this->form_validation->set_rules('Student_Name_Eng', 'ชื่อภาษาอังกฤษ', 'required');
		// $this->form_validation->set_rules('Student_Lname_Eng', 'นามสกุลภาษาอังกฤษ', 'required');
		// $this->form_validation->set_rules('Student_Nickname', 'ชื่อเล่น', 'required');
		// $this->form_validation->set_rules('Student_Phone', 'เบอร์โทรศัพท์นิสิต', 'required|is_natural_no_zero');
		// $this->form_validation->set_rules('Student_Email', 'อีเมลนิสิต', 'required|valid_email');
		// $this->form_validation->set_rules('Blood', 'กรุ๊ปเลือด', 'required');
		// $this->form_validation->set_rules('Facebook', 'Facebook', 'required');
		// $this->form_validation->set_rules('Line', 'Line', 'required');
		// $this->form_validation->set_rules('Address_Number', 'นิสิต : บ้านเลขที่', 'required');
		// // $this->form_validation->set_rules('Address_Moo', 'นิสิต : หมู่', 'is_natural_no_zero');
		// $this->form_validation->set_rules('Address_Soi', 'นิสิต : ซอย', 'required');
		// $this->form_validation->set_rules('Address_Tumbon', 'นิสิต : ตำบล', 'required');
		// $this->form_validation->set_rules('Address_Aumper', 'นิสิต : อำเภอ', 'required');
		// $this->form_validation->set_rules('Address_Province', 'นิสิต : จังหวัด', 'required');
		// $this->form_validation->set_rules('Address_Postcode', 'นิสิต : รหัสไปรษณีย์', 'required|is_natural_no_zero');
		// $this->form_validation->set_rules('Student_Phone', 'เบอร์โทรศัพท์นิสิต', 'required');
		// $this->form_validation->set_rules('Student_Email', 'อีเมลนิสิต', 'valid_email');
		// $this->form_validation->set_rules('Father_Name', 'ชื่อ-นามสกุลบิดา', 'required');
		// $this->form_validation->set_rules('Father_Career', 'อาชีพบิดา', 'required');
		// $this->form_validation->set_rules('Father_Status', 'ความสัมพันธ์บิดา', 'required');
		// $this->form_validation->set_rules('Father_Address_Number', 'บิดา : บ้านเลขที่', 'required');
		// // $this->form_validation->set_rules('Father_Address_Moo', 'บิดา : หมู่', 'is_natural_no_zero');
		// $this->form_validation->set_rules('Father_Address_Soi', 'บิดา : ซอย', 'required');
		// $this->form_validation->set_rules('Father_Address_Tumbon', 'บิดา : ตำบล', 'required');
		// $this->form_validation->set_rules('Father_Address_Aumper', 'บิดา : อำเภอ', 'required');
		// $this->form_validation->set_rules('Father_Address_Province', 'บิดา : จังหวัด', 'required');
		// $this->form_validation->set_rules('Father_Address_Postcode', 'บิดา : รหัสไปรณ๊ย์', 'required|is_natural_no_zero');
		// $this->form_validation->set_rules('Father_Phone', 'บิดา : เบอร์โทรศัพท์', 'required');
		// // $this->form_validation->set_rules('Father_Email', 'บิดา : อีเมล', 'required|valid_email');
		// $this->form_validation->set_rules('Mother_Name', 'ชื่อ-นามสกุลมารดา', 'required');
		// $this->form_validation->set_rules('Mother_Career', 'อาชีพมารดา', 'required');
		// $this->form_validation->set_rules('Mother_Status', 'ความสัมพันธ์มารดา', 'required');
		// $this->form_validation->set_rules('Mother_Address_Number', 'มารดา : บ้านเลขที่', 'required');
		// // $this->form_validation->set_rules('Mother_Address_Moo', 'มารดา : หมู่', 'is_natural_no_zero');
		// $this->form_validation->set_rules('Mother_Address_Soi', 'มารดา : ซอย', 'required');
		// $this->form_validation->set_rules('Mother_Address_Tumbon', 'มารดา : ตำบล', 'required');
		// $this->form_validation->set_rules('Mother_Address_Aumper', 'มารดา : อำเภอ', 'required');
		// $this->form_validation->set_rules('Mother_Address_Province', 'มารดา : จังหวัด', 'required');
		// $this->form_validation->set_rules('Mother_Address_Postcode', 'มารดา : รหัสไปรษณีย์', 'required|is_natural_no_zero');
		// $this->form_validation->set_rules('Mother_Phone', 'มารดา : เบอร์โทรศัพท์', 'required');
		// // $this->form_validation->set_rules('Mother_Email', 'มารดา : อีเมล', 'required|valid_email');
		// $this->form_validation->set_rules('Parent_Name', 'ชื่อ-นามสกุลผู้ปกครอง', 'required');
		// $this->form_validation->set_rules('Parent_Career', 'อาชีพผู้ปกครอง', 'required');
		// $this->form_validation->set_rules('Parent_Status', 'ความสัมพันธ์ผู้ปกครอง', 'required');
		// $this->form_validation->set_rules('Parent_Address_Number', 'ผู้ปกครอง : บ้านเลขที่', 'required');
		// // $this->form_validation->set_rules('Parent_Address_Moo', 'ผู้ปกครอง : หมู่', 'is_natural_no_zero');
		// $this->form_validation->set_rules('Parent_Address_Soi', 'ผู้ปกครอง : ซอย', 'required');
		// $this->form_validation->set_rules('Parent_Address_Tumbon', 'ผู้ปกครอง : ตำบล', 'required');
		// $this->form_validation->set_rules('Parent_Address_Aumper', 'ผู้ปกครอง : อำเภอ', 'required');
		// $this->form_validation->set_rules('Parent_Address_Province', 'ผู้ปกครอง : จังหวัด', 'required');
		// $this->form_validation->set_rules('Parent_Address_Postcode', 'ผู้ปกครอง : รหัสไปรษณีย์', 'required|is_natural_no_zero');
		// $this->form_validation->set_rules('Parent_Phone', 'ผู้ปกครอง : เบอร์โทรศัพท์', 'required');
		// // $this->form_validation->set_rules('Parent_Email', 'ผู้ปกครอง : อีเมล', 'required|valid_email');
		// if ($this->form_validation->run() == FALSE)
		// {
		// 	$this->editdata_student_admin($student_code) ;
		// } else {
			
		$data['Student_Name_Eng'] = $this->input->post('Student_Name_Eng');
		$data['Student_Lname_Eng'] = $this->input->post('Student_Lname_Eng');
		$data['Student_Nickname'] = $this->input->post('Student_Nickname');
		$data['Student_Phone'] = $this->input->post('Student_Phone');
		$data['Student_Email'] = $this->input->post('Student_Email');
		$data['Blood'] = $this->input->post('Blood');
		$data['Facebook'] = $this->input->post('Facebook');
		$data['Line'] = $this->input->post('Line');
		$data['Address_Number'] = $this->input->post('Address_Number');
		$data['Address_Moo'] = $this->input->post('Address_Moo');
		$data['Address_Soi'] = $this->input->post('Address_Soi');
		$data['Address_Tumbon'] = $this->input->post('Address_Tumbon');
		$data['Address_Aumper'] = $this->input->post('Address_Aumper');
		$data['Address_Province'] = $this->input->post('Address_Province');
		$data['Address_Postcode'] = $this->input->post('Address_Postcode');
		$data['Address_Phone'] = $this->input->post('Address_Phone');
		$data['Address_Email'] = $this->input->post('Address_Email');
		$data['Father_Name'] = $this->input->post('Father_Name');
		$data['Father_Career'] = $this->input->post('Father_Career');
		$data['Father_Status'] = $this->input->post('Father_Status');
		$data['Father_Address_Number'] = $this->input->post('Father_Address_Number');
		$data['Father_Address_Moo'] = $this->input->post('Father_Address_Moo');
		$data['Father_Address_Soi'] = $this->input->post('Father_Address_Soi');
		$data['Father_Address_Tumbon'] = $this->input->post('Father_Address_Tumbon');
		$data['Father_Address_Aumper'] = $this->input->post('Father_Address_Aumper');
		$data['Father_Address_Province'] = $this->input->post('Father_Address_Province');
		$data['Father_Address_Postcode'] = $this->input->post('Father_Address_Postcode');
		$data['Father_Phone'] = $this->input->post('Father_Phone');
		$data['Father_Email'] = $this->input->post('Father_Email');
		$data['Mother_Name'] = $this->input->post('Mother_Name');
		$data['Mother_Career'] = $this->input->post('Mother_Career');
		$data['Mother_Status'] = $this->input->post('Mother_Status');
		$data['Mother_Address_Number'] = $this->input->post('Mother_Address_Number');
		$data['Mother_Address_Moo'] = $this->input->post('Mother_Address_Moo');
		$data['Mother_Address_Soi'] = $this->input->post('Mother_Address_Soi');
		$data['Mother_Address_Tumbon'] = $this->input->post('Mother_Address_Tumbon');
		$data['Mother_Address_Aumper'] = $this->input->post('Mother_Address_Aumper');
		$data['Mother_Address_Province'] = $this->input->post('Mother_Address_Province');
		$data['Mother_Address_Postcode'] = $this->input->post('Mother_Address_Postcode');
		$data['Mother_Phone'] = $this->input->post('Mother_Phone');
		$data['Mother_Email'] = $this->input->post('Mother_Email');
		$data['Parent_Name'] = $this->input->post('Parent_Name');
		$data['Parent_Career'] = $this->input->post('Parent_Career');
		$data['Parent_Status'] = $this->input->post('Parent_Status');
		$data['Parent_Address_Number'] = $this->input->post('Parent_Address_Number');
		$data['Parent_Address_Moo'] = $this->input->post('Parent_Address_Moo');
		$data['Parent_Address_Soi'] = $this->input->post('Parent_Address_Soi');
		$data['Parent_Address_Tumbon'] = $this->input->post('Parent_Address_Tumbon');
		$data['Parent_Address_Aumper'] = $this->input->post('Parent_Address_Aumper');
		$data['Parent_Address_Province'] = $this->input->post('Parent_Address_Province');
		$data['Parent_Address_Postcode'] = $this->input->post('Parent_Address_Postcode');
		$data['Parent_Phone'] = $this->input->post('Parent_Phone');
		$data['Parent_Email'] = $this->input->post('Parent_Email');
		$data['Contact_Name'] = $this->input->post('Contact_Name');
		$data['Contact_Status'] = $this->input->post('Contact_Status');
		$data['Contact_Email'] = $this->input->post('Contact_Email');
		$data['Contact_Address_Number'] = $this->input->post('Contact_Address_Number');
		$data['Contact_Address_Tumbon'] = $this->input->post('Contact_Address_Tumbon');
		$data['Contact_Address_Aumper'] = $this->input->post('Contact_Address_Aumper');
		$data['Contact_Address_Province'] = $this->input->post('Contact_Address_Province');
		$data['Contact_Address_Postcode'] = $this->input->post('Contact_Address_Postcode');
		$data['Contact_Phone'] = $this->input->post('Contact_Phone');

		$this->m_student->update_datastudent($data, $student_code);
		redirect('admin/c_admin/data_student_detail_admin/'.$student_code,'refresh');
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
				$count_status = [];
				require(FCPATH.'/application/libraries/XLSXReader.php');
                $xlsx = new XLSXReader($file['full_path']);
                $sheet = $xlsx->getSheetNames()[1];
                foreach($xlsx->getSheetData($sheet) as $key => $row) {
					if($key == 0) 
						continue;
					//date converted
					$row[13] = XLSXReader::toUnixTimeStamp($row[13]);
					// // var_dump($row);
					// //ตัดหลักสูตร ศูนย์คือเอาข้างหน้า
					$course_id = explode(":", $row[8]);
					$course_id = $course_id[0];
					if(!$this->m_admin->search_course($course_id)) {
						$array['Course_ID'] = $course_id;
						$array['Course_Name'] = $row[8];
						$this->load->model('m_admin');
						$this->m_admin->insert_course($array);
					} 
					$insert = array();
					$insert['Faculty_ID'] = $Faculty_ID;
					$insert['Teacher_ID'] = 'none';					
					$insert['Student_IdNum'] = $row[1];
					$insert['Student_Prefix'] = $row[2];
					$insert['Student_Name_Th'] = $row[3];
					$insert['Student_Lname_Th'] = $row[4];
					$insert['Student_Name_Eng'] = $row[5];
					$insert['Student_Lname_Eng'] = $row[6];
					$insert['Campus'] = $row[7];
					$insert['Course'] = $row[8];
					$insert['Level'] = $row[9];
					$insert['Entry_Years'] = $row[10];
					$insert['Entry_Method'] = $row[11];
					$insert['Status_ID'] = $row[12];
					$insert['Birthday'] = date('Y-m-d', $row[13]);
					$insert['GradFromSchool'] = $row[14];
					$insert['Highes_Ed'] = $row[15];
					$insert['Province_Birth'] = $row[16];
					$insert['Nationality'] = $row[17];
					$insert['Relidion'] = $row[18];
					$insert['Father_Name'] = $row[19];
					$insert['Parent_Status'] = $row[20];
					$insert['Mother_Name'] = $row[22];
					$insert['Parent_Name'] = $row[23];
					$insert['Contact_Name'] = $row[24];
					$insert['Home_Address_Number'] = $row[25];
					$insert['Home_Address_Moo'] = $row[26];
					$insert['Home_Address_Soi'] = $row[27];
					$insert['Home_Address_Tumbon'] = $row[28];
					$insert['Home_Address_Aumper'] = $row[29];
					$insert['Home_Address_Province'] = $row[30];
					$insert['Home_Address_Postcode'] = $row[31];
					$insert['Parent_Address_Number'] = $row[32];
					$insert['Parent_Address_Moo'] = $row[33];
					$insert['Parent_Address_Soi'] = $row[34];
					$insert['Parent_Address_Tumbon'] = $row[35];
					$insert['Parent_Address_Aumper'] = $row[36];
					$insert['Parent_Address_Province'] = $row[37];
					$insert['Parent_Address_Postcode'] = $row[38];
					$insert['Contact_Address_Number'] = $row[39];
					$insert['Contact_Address_Tumbon'] = $row[40];
					$insert['Contact_Address_Aumper'] = $row[41];
					$insert['Contact_Address_Province'] = $row[42];
					$insert['Contact_Address_Postcode'] = $row[43];
					$insert['Blood'] = $row[44];
					$insert['Degree'] = $row[45];
					// print_r($row);
					// print_r($insert);
					// echo "<br><br>";	

					if($this->m_student->search_student($row[0])) {
						//found
						$this->m_student->update_datastudent($insert, $row[0]);
					} else {
						//add new
						$insert['Student_ID'] = $row[0];						
						$this->m_student->add_student($insert);
					}

					@$count_status[$row[10]][$row[8]][$row[12]]++;
					
				}
				// ส่วนสถิติจำนวนนิสิตตามสถานะนิสิต
				foreach ($count_status as $year => $courses) {
					foreach($courses as $course_name => $course_data){
						foreach($course_data as $status_id => $count_student){

							$insert_array = [];
							$insert_array['Stat_Years'] = $year;
							$insert_array['Stat_Course'] = $course_name;
							$insert_array['Stat_Status'] = $status_id;
							$insert_array['Stat_Amount'] = $count_student;
							$insert_array['Stat_Date'] = date('Y-m-d H:i:s');
							$this->m_admin->stat_student($insert_array);
							// print_r(insert_array);
							// echo $year.' '.$course_name.' '.$status_id." ".$count_student."\n";
						}
					}
				}
				// print_r($count_status);
				// die();
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
					if($key == 0)
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
		// เช็คสถานะการอัพข้อมูลเกรดเฉลี่ยรวม
		public function add_grade($status= '')
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
			$this->template->view('admin/add_grade',$data);
		}
		// เช็คสถานะการอัพข้อมูลเกรดเฉลี่ยรวม
		public function post_grade()
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
					if($key == 0)
						continue;		
					$insert = array();
					$insert['Student_ID'] = $row[0];
					$insert['GPAX'] = $row[1];
					// var_dump($insert);
					// print_r($insert);
					
						$this->m_student->update_grade($insert);
				
				}
				$this->add_grade('success');
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
			$data['Scholarship_Year'] = $this->input->post('Scholarship_Year');
			$data['Scholarship_Count'] = $this->input->post('Scholarship_Count');
			$data['Scholarship_Amount'] = $this->input->post('Scholarship_Amount');
			$data['Scholarship_Amounttotal'] = $this->input->post('Scholarship_Amounttotal');
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
			$data['Scholarship_Name'] = $this->input->post('Scholarship_Name');
			$data['Scholarship_Giver'] = $this->input->post('Scholarship_Giver');
			$data['Scholarship_Year'] = $this->input->post('Scholarship_Year');
			$data['Scholarship_Count'] = $this->input->post('Scholarship_Count');
			$data['Scholarship_Amount'] = $this->input->post('Scholarship_Amount');
			$data['Scholarship_Amounttotal'] = $this->input->post('Scholarship_Amounttotal');
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
			redirect('admin/c_admin/activity_student');

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
		public function delete_activity_has_student($activity_id){
			// print_r($_POST);
			$activity_id = $this->input->post('Activity_Activitie_ID');
			$student_id = $this->input->post('Student_Student_ID');
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
			$this->template->view('admin/activity_student_admin',$data);
		}
		// รายชื่อนิสิตกิจกรรม
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
		// โปรสูง โปรต่ำ
		public function consider()
		{
			
			if($this->input->post('consider')) { 
				if($this->input->post('consider') == 'high'){
				// โปรสูง
				$data['student'] = $this->m_admin->search_student_between_gpax(1.80, 1.99);
				} else {
					// โปรต่ำ
					$data['student'] = $this->m_admin->search_student_between_gpax(1.75, 1.79);
				}
			} else {
				$data['student'] = array();
			}

		} 

	}
?>