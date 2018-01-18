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
		$this->load->view('welcome_message');
	}

	public function login()
	{
		$this->load->view('login');
	}
	
	public function activity()
	{
		$this->load->view('activity');
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
		$this->load->view('award');
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
}
