<?php
class m_award extends CI_Model
{
        public function get_all(){
            $this->db->order_by('Student_Code','ASC');
            $query = $this->db->get('Award');
            return $query->result_array();
        }
}

?>