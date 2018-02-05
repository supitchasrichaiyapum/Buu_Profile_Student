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
			redirect('welcome/menu_tercher');
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
		$this->template->view('activity',@$data);
	}

	public function coop()
	{
		$this->template->view('coop',@$data);
	}

	public function award()
	{
		$this->load->model('m_award');
		$data['query'] = $this->m_award->get_all();
		$this->template->view('award',@$data);
	}

	public function graduate()
	{
		$this->template->view('graduate',@$data);
	}

	public function statistics()
	{
		$this->template->view('statistics',@$data);
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
		$id = $this->session->userdata('user_id');
		$data['Student'] = $this->m_student->get_student($id);
		$this->template->view('student/edit_student',$data);
	}

	public function transcript()
	{
		$id = $this->session->userdata('user_id');
		$data['Student'] = $this->m_student->get_student($id);
		$this->template->view('student/transcript',$data);
	}

	public function activity_student()
	{
		$id = $this->session->userdata('user_id');
		$data['Student'] = $this->m_student->get_student($id);
		$this->template->view('student/activity',$data);
	}

	public function statistics_student()
	{
		$data['user_id'] = $this->session->userdata('user_id');
		$data['student'] = $this->m_student->get_student($data['user_id']);
		$this->template->view('student/statistics',$data);
	}

	public function menu_teacher()
	{
		$id = $this->session->userdata('user_id');
		$data['Teacher'] = $this->m_teacher->get_teacher($id);
		$this->template->view('template/main_view',$data);
		
	}

	public function menu_admin()
	{
		$id = $this->session->userdata('user_id');
		$data['Admin'] = $this->m_admin->get_admin($id);
		$this->template->view('template/main_view',$data);
		
	}

//

}
