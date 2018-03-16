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

	public function edit_teacher()
	{
		$data['user_id'] = $this->session->userdata('user_id');
		$data['teacher'] = $this->m_teacher->get_teacher($data['user_id']);
		$this->template->view('teacher/edit_teacher',$data);
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
			// น่าจะเป็นส่วนแสดงชื่อนิสิต
			// $this->load->model('m_student');
			// $data['student_code'] = $this->session->userdata('student_code');
			// $data['result'] = $this->m_student->get_student($data['student_code']);
		} else {
			$data['result'] = array();
		}
		$this->template->view('teacher/activity_student_teacher',$data);
	}

	public function award_student_teacher()
	{
		$this->load->model('m_award');
		$data['result'] = $this->m_award->get_all();
		$data['user_id'] = $this->session->userdata('user_id');
		$data['teacher'] = $this->m_teacher->get_teacher($data['user_id']);
		$this->template->view('teacher/award_student_teacher',$data);
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

	public function data_student_teacher()
	{
		$data['user_id'] = $this->session->userdata('user_id');
		$data['teacher'] = $this->m_teacher->get_teacher($data['user_id']);
		$this->template->view('teacher/data_student_teacher',$data);
	}

	public function edit_student_teacher()
	{
		$data['user_id'] = $this->session->userdata('user_id');
		$data['teacher'] = $this->m_teacher->get_teacher($data['user_id']);
		$this->template->view('teacher/edit_student_teacher',$data);
    }
}

?>