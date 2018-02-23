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

	public function edit_admin()
	{
		$data['user_id'] = $this->session->userdata('user_id');
		$data['admin'] = $this->m_admin->get_admin($data['user_id']);
		$this->template->view('admin/edit_admin',$data);
	}

	public function coop_student_admin()
	{
		$data['user_id'] = $this->session->userdata('user_id');
		$data['admin'] = $this->m_admin->get_admin($data['user_id']);
		$this->template->view('admin/coop_student_admin',$data);
	}

	public function activity_student_admin()
	{
		$data['user_id'] = $this->session->userdata('user_id');
		$data['admin'] = $this->m_admin->get_admin($data['user_id']);
		$this->template->view('admin/activity_student_admin',$data);
	}

	public function award_student_admin()
	{
		$this->load->model('m_award');
		$data['user_id'] = $this->session->userdata('user_id');
		$data['admin'] = $this->m_admin->get_admin($data['user_id']);
		$data['query'] = $this->m_award->get_all();
		$this->template->view('admin/award_student_admin',$data);
	}

	public function addaward_student_admin() //ยังเพิ่มไม่ได้
	{
		$this->load->model('m_award');
		$data['user_id'] = $this->session->userdata('user_id');
		$data['admin'] = $this->m_admin->get_admin($data['user_id']);
		$data['query'] = $this->m_award->get_all();
		$this->template->view('admin/addaward_student_admin',$data);
	}

	public function editaward_student_admin() //ยังแก้ไขไม่ได้
	{
		$this->load->model('m_award');
		$data['user_id'] = $this->session->userdata('user_id');
		$data['admin'] = $this->m_admin->get_admin($data['user_id']);
		$data['query'] = $this->m_award->get_all();
		$this->template->view('admin/editaward_student_admin',$data);
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


	public function scholarship_student_admin()
		{
			$data['user_id'] = $this->session->userdata('user_id');
			$data['admin'] = $this->m_admin->get_admin($data['user_id']);
			$this->template->view('admin/scholarship_student_admin',$data);
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

		public function insert(){
		   $this->load->model(m_award);
		   $this->m_award->insert();
		   redirect('admin/c_admin/award_student_admin');
        }
		public function Form(){
			$data['user_id'] = $this->session->userdata('user_id');
			$data['admin'] = $this->m_admin->get_admin($data['user_id']);
			$this->template->view('admin/addaward_student_admin',$data);
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

		public function delete(){
			$id = $this->uri->segment(3);
			$this->load->model('m_award');
			$this->m_award->delete($id);
			redirect('c_admin');
		}

	}
?>