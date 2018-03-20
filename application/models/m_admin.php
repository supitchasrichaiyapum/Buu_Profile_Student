<?php
class m_admin extends CI_Model
{
        public function get_admin($id){
            $this->db->from('Staff');
            $this->db->where('Staff_ID',$id);
            $query = $this->db->get();
            return $query->result_array()[0];
        }
        
        public function insert_faculty($array) {
            $this->db->replace('Faculty', $array);
            return $this->db->insert_id();
        }
        public function search_faculty($Branch) {
            $this->db->where('Branch', $Branch);
            $this->db->from('Faculty');
            $query = $this->db->get();
            return $query->result_array();
        }

        public function graduate_actoradmin()
	    {
            $data['user_id'] = $this->session->userdata('user_id');
            $data['admin'] = $this->m_admin->get_admin($data['user_id']);
            $this->template->view('admin/graduate_actoradmin',$data);
        }
        
}
?>