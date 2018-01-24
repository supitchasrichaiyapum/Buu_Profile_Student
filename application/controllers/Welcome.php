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
		$data['user_id'] = $this->session->userdata('user_id');
		$this->load->view('welcome_message', $data);

	}

	public function login()
	{
		$this->load->view('login');
	}
	
	public function activity()
	{
		$this->load->view('activity');
	}

	public function activity_list()
	{
		$this->load->view('activity_list');
	}

	public function coop()
	{
		$this->load->view('coop');
	}

	public function coop_list()
	{
		$this->load->view('coop_list');
	}

	public function award()
	{
		$this->load->model('m_award');
		$data['query'] = $this->m_award->get_all();
		$this->load->view('award', $data);
	}

	public function statistics()
	{
		$this->load->view('statistics');
	}

	public function statistics_list()
	{
		$this->load->view('statistics_list');
	}

	public function graduate()
	{
		$this->load->view('graduate');
	}

	public function graduate_check()
	{
		$this->load->view('graduate_check');
	}

	public function graduate_list()
	{
		$this->load->view('graduate_list');
	}




// เดี๋ยวมาลบ ทำไว้หลอกตัวเอง
	public function menu_student()
	{
		$this->load->view('menu_student');
	}

	public function menu_admin()
	{
		$this->load->view('menu_admin');
	}

	public function data_student()
	{
		$this->load->view('data_student');
	}
//

}
