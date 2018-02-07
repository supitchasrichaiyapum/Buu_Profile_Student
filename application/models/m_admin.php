<?php
class m_admin extends CI_Model
{
        public function get_admin($id){
            $this->db->from('Admin');
            $this->db->where('Admin_ID',$id);
            $query = $this->db->get();
            return $query->result_array()[0];
        }
}

?>