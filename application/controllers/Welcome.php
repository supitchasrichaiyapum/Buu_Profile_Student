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
			redirect('welcome/menu_student');
			die();

		} else if($this->session->userdata('actor') == 'Teacher') {
			redirect('welcome/menu_teacher');
			die();

		} else if($this->session->userdata('actor') == 'Admin') {
			redirect('welcome/menu_admin');
			die();
		}

		$data['user_id'] = $this->session->userdata('user_id');
		$this->template->view('template/main_view',$data);

	}

	public function login()
	{
		$this->load->view('login/login');
	}
	
	public function activity()
	{
		$this->template->view('user/activity',@$data);
	}

	public function coop()
	{
		$this->template->view('user/coop',@$data);
	}

	public function award()
	{
		$this->load->model('m_award');
		$data['query'] = $this->m_award->get_all();
		$this->template->view('user/award',@$data);
	}

	public function graduate()
	{
		$this->template->view('user/graduate',@$data);
	}

	public function statistics()
	{
		$this->template->view('user/statistics',@$data);
	}

// ส่วนของแถบเมนูของส่วนหัวโดยที่เมนูแยกส่วนตามสิทธ์

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

	public function transcript_student()
	{
		$data['user_id'] = $this->session->userdata('user_id');
		$data['student'] = $this->m_student->get_student($data['user_id']);
		$this->template->view('student/transcript_student',$data);
	}

	public function activity_student()
	{
		$data['user_id'] = $this->session->userdata('user_id');
		$data['student'] = $this->m_student->get_student($data['user_id']);
		$this->template->view('student/activity_student',$data);
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

	public function coop_teacher()
	{
		$data['user_id'] = $this->session->userdata('user_id');
		$data['teacher'] = $this->m_teacher->get_teacher($data['user_id']);
		$this->template->view('teacher/coop_teacher',$data);
	}

	public function activity_teacher()
	{
		$data['user_id'] = $this->session->userdata('user_id');
		$data['teacher'] = $this->m_teacher->get_teacher($data['user_id']);
		$this->template->view('teacher/activity_teacher',$data);
	}

	public function statistics_teacher()
	{
		$data['user_id'] = $this->session->userdata('user_id');
		$data['teacher'] = $this->m_teacher->get_teacher($data['user_id']);
		$this->template->view('teacher/statistics_teacher',$data);
	}

	public function consider_teacher()
	{
		$data['user_id'] = $this->session->userdata('user_id');
		$data['teacher'] = $this->m_teacher->get_teacher($data['user_id']);
		$this->template->view('teacher/consider_teacher',$data);
	}

	public function graduate_teacher()
	{
		$data['user_id'] = $this->session->userdata('user_id');
		$data['teacher'] = $this->m_teacher->get_teacher($data['user_id']);
		$this->template->view('teacher/graduate_teacher',$data);
	}

	public function dataStudent_teacher()
	{
		$data['user_id'] = $this->session->userdata('user_id');
		$data['teacher'] = $this->m_teacher->get_teacher($data['user_id']);
		$this->template->view('teacher/dataStudent_teacher',$data);
	}

	public function editStudent_teacher()
	{
		$data['user_id'] = $this->session->userdata('user_id');
		$data['teacher'] = $this->m_teacher->get_teacher($data['user_id']);
		$this->template->view('teacher/editStudent_teacher',$data);
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

	public function edit_admin()
	{
		$data['user_id'] = $this->session->userdata('user_id');
		$data['admin'] = $this->m_admin->get_admin($data['user_id']);
		$this->template->view('admin/edit_admin',$data);
	}

	public function coop_admin()
	{
		$data['user_id'] = $this->session->userdata('user_id');
		$data['admin'] = $this->m_admin->get_admin($data['user_id']);
		$this->template->view('admin/coop_admin',$data);
	}

	public function activity_admin()
	{
		$data['user_id'] = $this->session->userdata('user_id');
		$data['admin'] = $this->m_admin->get_admin($data['user_id']);
		$this->template->view('admin/activity_admin',$data);
	}

	public function statistics_admin()
	{
		$data['user_id'] = $this->session->userdata('user_id');
		$data['admin'] = $this->m_admin->get_admin($data['user_id']);
		$this->template->view('admin/statistics_admin',$data);
	}

	public function consider_admin()
	{
		$data['user_id'] = $this->session->userdata('user_id');
		$data['admin'] = $this->m_admin->get_admin($data['user_id']);
		$this->template->view('admin/consider_admin',$data);
	}

	public function graduate_admin()
	{
		$data['user_id'] = $this->session->userdata('user_id');
		$data['admin'] = $this->m_admin->get_admin($data['user_id']);
		$this->template->view('admin/graduate_admin',$data);
	}

	public function dataStudent_admin()
	{
		$data['user_id'] = $this->session->userdata('user_id');
		$data['admin'] = $this->m_admin->get_admin($data['user_id']);
		$this->template->view('admin/dataStudent_admin',$data);
	}

	public function editStudent_admin()
	{
		$data['user_id'] = $this->session->userdata('user_id');
		$data['admin'] = $this->m_admin->get_admin($data['user_id']);
		$this->template->view('admin/editStudent_admin',$data);
	}

	
}
