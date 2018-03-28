<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class c_student extends CI_Controller {

	public function __construct()
    {
		parent::__construct();

		if($this->session->userdata('user_id') == ''){
			redirect('c_login/login');
			die();
		}
	
		if($this->session->userdata('actor') == 'Teacher') {
			redirect('teacher/c_teacher/menu_teacher');
			die();

		} else if($this->session->userdata('actor') == 'Admin') {
			redirect('admin/c_admin/menu_admin');
			die();
		}
		
	}

    public function index()
    {
		$data['user_id'] = $this->session->userdata('user_id');
		$data['student'] = $this->m_student->get_student($data['user_id']);
		$this->template->view('template/main_view',$data);

    }
    
    public function menu_student()
	{
		$data['user_id'] = $this->session->userdata('user_id');
		$data['student'] = $this->m_student->get_student($data['user_id']);
		$this->template->view('template/main_view',$data);

	}

	public function data_student()
	{
		$data['user_id'] = $this->session->userdata('user_id');
		$data['student'] = $this->m_student->get_student($data['user_id']);
		$data['scholarship'] = $this->m_scholarship->get_Scholarship_by_student($data['user_id']);
		$data['activity'] = $this->m_activity->get_by_student_id($data['user_id']);
		$data['award'] = $this->m_award->get_Award_by_student($data['user_id']);
		$this->template->view('student/data_student',$data);
	}

	public function edit_datastudent()
	{
		$data['user_id'] = $this->session->userdata('user_id');
		$data['student'] = $this->m_student->get_student($data['user_id']);
		$this->template->view('student/edit_datastudent',$data);
		
	}

	public function post_edit_student()
	{

		$data['Student_NameEng'] = $this->input->post('Student_NameEng');
		$data['Student_LNameENG'] = $this->input->post('Student_LNameENG');
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
		$data['Fatheraddress_Number'] = $this->input->post('Fatheraddress_Number');
		$data['Fatheraddress_Moo'] = $this->input->post('Fatheraddress_Moo');
		$data['Fatheraddress_Soi'] = $this->input->post('Fatheraddress_Soi');
		$data['Fatheraddress_Tumbon'] = $this->input->post('Fatheraddress_Tumbon');
		$data['Fatheraddress_Aumper'] = $this->input->post('Fatheraddress_Aumper');
		$data['Fatheraddress_Province'] = $this->input->post('Fatheraddress_Province');
		$data['Fatheraddress_Postcode'] = $this->input->post('Fatheraddress_Postcode');
		$data['Father_Phone'] = $this->input->post('Father_Phone');
		$data['Father_Email'] = $this->input->post('Father_Email');
		$data['Mother_Name'] = $this->input->post('Mother_Name');
		$data['Mother_Career'] = $this->input->post('Mother_Career');
		$data['Mother_Status'] = $this->input->post('Mother_Status');
		$data['Motheraddress_Number'] = $this->input->post('Motheraddress_Number');
		$data['Motheraddress_Moo'] = $this->input->post('Motheraddress_Moo');
		$data['Motheraddress_Soi'] = $this->input->post('Motheraddress_Soi');
		$data['Motheraddress_Tumbon'] = $this->input->post('Motheraddress_Tumbon');
		$data['Motheraddress_Aumper'] = $this->input->post('Motheraddress_Aumper');
		$data['Motheraddress_Province'] = $this->input->post('Motheraddress_Province');
		$data['Motheraddress_Postcode'] = $this->input->post('Motheraddress_Postcode');
		$data['Mother_Phone'] = $this->input->post('Mother_Phone');
		$data['Mother_Email'] = $this->input->post('Mother_Email');
		$data['Parent_Name'] = $this->input->post('Parent_Name');
		$data['Parent_Career'] = $this->input->post('Parent_Career');
		$data['Parent_Status'] = $this->input->post('Parent_Status');
		$data['Parentaddress_Number'] = $this->input->post('Parentaddress_Number');
		$data['Parentaddress_Moo'] = $this->input->post('Parentaddress_Moo');
		$data['Parentaddress_Soi'] = $this->input->post('Parentaddress_Soi');
		$data['Parentaddress_Tumbon'] = $this->input->post('Parentaddress_Tumbon');
		$data['Parentaddress_Aumper'] = $this->input->post('Parentaddress_Aumper');
		$data['Parentaddress_Province'] = $this->input->post('Parentaddress_Province');
		$data['Parentaddress_Postcode'] = $this->input->post('Parentaddress_Postcode');
		$data['Parent_Phone'] = $this->input->post('Parent_Phone');
		$data['Parent_Email'] = $this->input->post('Parent_Email');

		$this->m_student->update_datastudent($data, $this->session->userdata('user_id'));
		redirect('student/c_student/data_student', 'refresh');
		
	}
	


	public function transcript_student()
	{
		$data['user_id'] = $this->session->userdata('user_id');
		$data['student'] = $this->m_student->get_student($data['user_id']);
		$data['transcript'] = $this->m_student->get_transcript($data['user_id']);
		$data['GPA'] = $this->m_student->get_GPA($data['user_id']);
		$this->template->view('student/transcript_student',$data);
	}

	public function activity_student()
	{
		$data['user_id'] = $this->session->userdata('user_id');
		$data['student'] = $this->m_student->get_student($data['user_id']);
		$data['student_code'] = $this->input->get('textfield');
		if($data['student_code']) {
			$this->load->model('m_activity');
			$data['result'] = $this->m_activity->search_activity($data['student_code']);
			
		} else {
			$data['result'] = array();
		}
		$this->template->view('student/activity_student',$data);
	}

	// รายชื่อรางวัลการแข่งขัน
	public function award_student()
	{
		$this->load->model('m_award');
		$data['user_id'] = $this->session->userdata('user_id');
		$data['student'] = $this->m_student->get_student($data['user_id']);
		$data['result'] = $this->m_award->get_all_award();
		$data['result1'] = $this->m_award->get_by_id_award_has_student($data['result']);
		// print_r($data);
		$this->template->view('student/award_student',$data);
	}
	// รายชื่อนิสิตในรางวัลนั้นๆ
	public function award_detail_st($id)
	{
		$data['award_id'] = $id;
		// print_r($id);
		$this->load->model('m_award');
		$data['user_id'] = $this->session->userdata('user_id');
		$data['student'] = $this->m_student->get_student($data['user_id']);
		$data['result1'] = $this->m_award->get_Award_by_id($id);
		// print_r($data);
		$this->template->view('student/award_detail_st',$data);
	}
	public function statistics_student()
	{
		$data['user_id'] = $this->session->userdata('user_id');
		$data['student'] = $this->m_student->get_student($data['user_id']);
		$this->template->view('student/statistics_student',$data);
	}

	public function coop_student()
	{
		$data['user_id'] = $this->session->userdata('user_id');
		$data['student'] = $this->m_student->get_student($data['user_id']);
		$this->template->view('student/coop_student',$data);
	}
	
	public function graduate_actorstudent()
	{
		$data['user_id'] = $this->session->userdata('user_id');
		$data['student'] = $this->m_student->get_student($data['user_id']);
		$this->template->view('student/graduate_actorstudent',$data);
	}

	// รายชื่อทุนการศึกษา
	public function scholarship_student()
	{
		$this->load->model('m_scholarship');
		$data['user_id'] = $this->session->userdata('user_id');
		$data['student'] = $this->m_student->get_student($data['user_id']);
		$data['result'] = $this->m_scholarship->get_all_scholarship();
		$data['result1'] = $this->m_scholarship->get_by_id_scholarship_has_student($data['result']);
		// print_r($data);
		$this->template->view('student/scholarship_student',$data);
	}
	// รายชื่อนิสิตในทุนการศึกษา
	public function scholarship_detail($id)
	{
	$data['scholarship_id'] = $id;
	// print_r($id);
	$this->load->model('m_scholarship');
	$data['user_id'] = $this->session->userdata('user_id');
		$data['student'] = $this->m_student->get_student($data['user_id']);
	$data['result1'] = $this->m_scholarship->get_Scholarship_by_id($id);
	// print_r($data);
	$this->template->view('student/scholarship_detail',$data);
	}

}
	
?>