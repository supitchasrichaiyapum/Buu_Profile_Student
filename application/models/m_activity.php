<?php
class m_activity extends CI_Model
{
        public function get_all(){
            $this->db->order_by('Student_Code','ASC');
            $query = $this->db->get('Activity_ID');
            return $query->result_array();
        }
}

?>