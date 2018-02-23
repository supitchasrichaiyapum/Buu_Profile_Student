<?php
class m_admin extends CI_Model
//เช็คเจ้าหน้าที่qa
{
        public function get_admin($id){
            $this->db->from('Staff');
            $this->db->where('Staff_ID',$id);
            $query = $this->db->get();
            return $query->result_array()[0];
        }
}

?>