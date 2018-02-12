<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class c_student extends CI_Controller {

    // if($this->session->userdata('user_id') == '') {
    //     redirect('login');
    //     die();
    // }

    // if($this->session->userdata('actor') != 'Student'){
    //     redirect('');
    //     die();
    // }
    
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

	public function award_student()
	{
		$this->load->model('m_award_student');
		$data['query'] = $this->m_award_student->get_all();
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
}

?>