<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class c_teacher extends CI_Controller {

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

		} else if($this->session->userdata('actor') == 'Admin') {
			redirect('admin/c_admin/menu_admin');
			die();
		}
	}
  
    public function index()
    {
		$data['user_id'] = $this->session->userdata('user_id');
		$data['teacher'] = $this->m_teacher->get_teacher($data['user_id']);
		$this->template->view('template/main_view',$data);
    }

    public function menu_teacher()
	{
		// print_r($this->session->userdata());
		$data['user_id'] = $this->session->userdata('user_id');
		// print_r($data);
		$data['teacher'] = $this->m_teacher->get_teacher($data['user_id']);
		$this->template->view('template/main_view',$data);
		
	}

	public function data_teacher()
	{
		$data['user_id'] = $this->session->userdata('user_id');
		$data['teacher'] = $this->m_teacher->get_teacher($data['user_id']);
		$this->template->view('teacher/data_teacher',$data);
	}
	
	public function coop_student_teacher()
	{
		$data['user_id'] = $this->session->userdata('user_id');
		$data['teacher'] = $this->m_teacher->get_teacher($data['user_id']);
		$this->template->view('teacher/coop_student_teacher',$data);
	}

	public function activity_student_teacher()
	{
		$data['user_id'] = $this->session->userdata('user_id');
		$data['teacher'] = $this->m_teacher->get_teacher($data['user_id']);
		$data['student_code'] = $this->input->get('textfield');
		if($data['student_code']) {
			$this->load->model('m_activity');
			$data['result'] = $this->m_activity->search_activity($data['student_code']);
			
		} else {
			$data['result'] = array();
		}
		$this->template->view('teacher/activity_student_teacher',$data);
	}
	public function award_student_teacher()
	{
		$this->load->model('m_award');
		$data['user_id'] = $this->session->userdata('user_id');
		$data['teacher'] = $this->m_teacher->get_teacher($data['user_id']);
		$data['result'] = $this->m_award->get_all_award();
		$data['result1'] = $this->m_award->get_by_id_award_has_student($data['result']);
		// print_r($data);
		$this->template->view('teacher/award_student_teacher',$data);
	}
	// รายชื่อนิสิตในรางวัลนั้นๆ
	public function award_detail_student($id)
	{
		$data['award_id'] = $id;
		// print_r($id);
		$this->load->model('m_award');
		$data['user_id'] = $this->session->userdata('user_id');
		$data['teacher'] = $this->m_teacher->get_teacher($data['user_id']);
		$data['result1'] = $this->m_award->get_Award_by_id($id);
		// print_r($data);
		$this->template->view('teacher/award_detail_student',$data);
	}

	public function graduate_actorteacher()
	{
		$data['user_id'] = $this->session->userdata('user_id');
		$data['teacher'] = $this->m_teacher->get_teacher($data['user_id']);
		$this->template->view('teacher/graduate_actorteacher',$data);
	}

	public function statistics_student_teacher()
	{
		$data['user_id'] = $this->session->userdata('user_id');
		$data['teacher'] = $this->m_teacher->get_teacher($data['user_id']);
		$this->template->view('teacher/statistics_student_teacher',$data);
	}

	public function consider_student_teacher()
	{
		$data['user_id'] = $this->session->userdata('user_id');
		$data['teacher'] = $this->m_teacher->get_teacher($data['user_id']);
		$this->template->view('teacher/consider_student_teacher',$data);
	}

	public function graduate_student_teacher()
	{
		$data['user_id'] = $this->session->userdata('user_id');
		$data['teacher'] = $this->m_teacher->get_teacher($data['user_id']);
		$this->template->view('teacher/graduate_student_teacher',$data);
	}

	//ส่วนการค้นหาข้อมูล
	public function data_student_teacher()
	{
		$data['user_id'] = $this->session->userdata('user_id');
		$data['teacher'] = $this->m_teacher->get_teacher($data['user_id']);
		$data['student_code'] = $this->input->get('textfield');
		$data['scholarship'] = $this->m_scholarship->get_Scholarship_by_student($data['student_code']);
		$data['activity'] = $this->m_activity->get_by_student_id($data['student_code']);
		$data['award'] = $this->m_award->get_Award_by_student($data['student_code']);
		$data['status'] = $this->m_admin->search_student_status($data['student_code']);
		if($data['student_code']) {
			$this->load->model('m_admin');
			$data['result'] = $this->m_admin->search_student($data['student_code']);
		} else {
			$data['result'] = array();
		}
		$this->template->view('teacher/data_student_teacher',$data);
	}

	public function transcript_student_teacher($student_code)
	{
		$data['user_id'] = $this->session->userdata('user_id');
		$data['teacher'] = $this->m_teacher->get_teacher($data['user_id']);
		$this->load->model('m_student');
		$data['result'] = $this->m_student->get_student($student_code);
		$data['transcript'] = $this->m_student->get_transcript($student_code);
		$data['GPA'] = $this->m_student->get_GPA($student_code);
		$data['status'] = $this->m_admin->search_student_status($student_code);
		$this->template->view('admin/transcript_student_admin',$data);
	}

	public function editdata_student_teacher()
	{
		$data['user_id'] = $this->session->userdata('user_id');
		$data['teacher'] = $this->m_teacher->get_teacher($data['user_id']);
		$this->template->view('teacher/editdata_student_teacher',$data);
	}


	// รายชื่อทุนการศึกษา
	public function scholarship_student_teacher()
	{
		$this->load->model('m_scholarship');
		$data['user_id'] = $this->session->userdata('user_id');
		$data['teacher'] = $this->m_teacher->get_teacher($data['user_id']);
		$data['result'] = $this->m_scholarship->get_all_scholarship();
		$data['result1'] = $this->m_scholarship->get_by_id_scholarship_has_student($data['result']);
		// print_r($data);
		$this->template->view('teacher/scholarship_student_teacher',$data);
	}
	// รายชื่อนิสิตในทุนการศึกษา
	public function scholarship_detail_teacher($id)
	{
	$data['scholarship_id'] = $id;
	// print_r($id);
	$this->load->model('m_scholarship');
	$data['user_id'] = $this->session->userdata('user_id');
	$data['teacher'] = $this->m_teacher->get_teacher($data['user_id']);
	$data['result1'] = $this->m_scholarship->get_Scholarship_by_id($id);
	// print_r($data);
	$this->template->view('teacher/scholarship_detail_teacher',$data);
	}

	public function statistics_teacher()
	{
		$data['user_id'] = $this->session->userdata('user_id');
		$data['teacher'] = $this->m_teacher->get_teacher($data['user_id']);
		$this->template->view('teacher/statistics_teacher',$data);
	}

}

?>