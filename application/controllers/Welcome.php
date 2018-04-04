<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
		if($this->session->userdata('actor') == 'Student') {
			redirect('student/c_student/menu_student');
			die();

		} else if($this->session->userdata('actor') == 'Teacher') {
			redirect('teacher/c_teacher/menu_teacher');
			die();

		} else if($this->session->userdata('actor') == 'Admin') {
			redirect('admin/c_admin/menu_admin');
			die();
		}

		$data['user_id'] = $this->session->userdata('user_id');
		$this->template->view('template/main_view',$data);

	}

	public function login()
	{
       redirect('c_login/login');
	}
	
	// public function student_activity()
	// {
	// 	$data['student_code'] = $this->input->get('textfield');
		
	// 	if($data['student_code']) {
	// 		$this->load->model('m_activity');
	// 		$data['result'] = $this->m_activity->search_student_activity($data['student_code']);
	// 	} else {
	// 		$data['result'] = array();
	// 	}
	// 	print_r($data);
	// 	$this->template->view('user/activity', $data);
	// }

	public function activity()
	{
		$data['student_code'] = $this->input->get('textfield');
		if($data['student_code']) {
			$this->load->model('m_activity');
			$data['result'] = $this->m_activity->search_activity($data['student_code']);
		} else {
			$data['result'] = array();
		}
		$this->template->view('user/activity', $data);
	}

	public function award()
	{
		$this->load->model('m_award');
		$data['result'] = $this->m_award->get_all();
		$this->template->view('user/award', $data);
	}

	public function graduate()
	{
		$this->template->view('user/graduate');
	}

	public function statistics()
	{
		$this->template->view('user/statistics');
	}
	
}
