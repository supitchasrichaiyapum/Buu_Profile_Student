<?php
class m_student extends CI_Model
{
        public function get_student($id){
            $this->db->from('Student');
            $this->db->where('Student_ID',$id);
            $query = $this->db->get();
            return $query->result_array()[0];
        }
}

?>