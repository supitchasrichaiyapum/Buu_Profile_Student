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
		$this->template->view('student/data_student',$data);
	}

	public function edit_student()
	{
		$data['user_id'] = $this->session->userdata('user_id');
		$data['student'] = $this->m_student->get_student($data['user_id']);
		$this->template->view('student/edit_student',$data);
	}


	public function activity_student()
	{
		$data['user_id'] = $this->session->userdata('user_id');
		$data['student'] = $this->m_student->get_student($data['user_id']);
		$data['student_code'] = $this->input->get('textfield');
		if($data['student_code']) {
			$this->load->model('m_activity');
			$data['result'] = $this->m_activity->search_activity($data['student_code']);
			// น่าจะเป็นส่วนแสดงชื่อนิสิต
			// $this->load->model('m_student');
			// $data['student_code'] = $this->session->userdata('student_code');
			// $data['result'] = $this->m_student->get_student($data['student_code']);
		} else {
			$data['result'] = array();
		}
		$this->template->view('student/activity_student',$data);
	}

	public function award_student()
	{
		$this->load->model('m_award');
		$data['result'] = $this->m_award->get_all();
		$data['user_id'] = $this->session->userdata('user_id');
		$data['student'] = $this->m_student->get_student($data['user_id']);
		$this->template->view('student/award_student',$data);
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
}

?>