<?php
class c_port extends CI_Controller{	
	public function __construct()
	{ 
		parent::__construct();
	}

	function login_student()
	{
		$bodypage = '';
		return $this->load->view('student_menu/login_student',$bodypage,TRUE);
	}

	function menu_student()
	{
		$bodypage = '';
		return $this->load->view('student_menu/menu_student',$bodypage,TRUE);
	}
	
}