<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_activity extends CI_Controller {

    public function index()
	{
        $this->load->model(' m_activity');
		$data['query'] = $this->m_activity->get_all();
		$this->load->view('activity', $data);

    }
}
?>