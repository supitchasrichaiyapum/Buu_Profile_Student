<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class c_user extends CI_Controller {

// ดูรางวัลการแข่งขัน
	public function award()
	{
		$this->load->model('m_award');
		$data['result'] = $this->m_award->get_all_award();
		$data['result1'] = $this->m_award->get_by_id_award_has_student($data['result']);
		// print_r($data);
		$this->template->view('user/award',$data);
	}
	// รายชื่อนิสิตในรางวัลนั้นๆ
	public function award_detail_user($id)
	{
		$data['award_id'] = $id;
		// print_r($id);
		$this->load->model('m_award');
		$data['result1'] = $this->m_award->get_Award_by_id($id);
		// print_r($data);
		$this->template->view('user/award_detail_user',$data);
	}
}