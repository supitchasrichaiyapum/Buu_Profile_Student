<?php
class m_award extends CI_Model
{
        public function get_all(){
            $this->db->order_by('Award_ID','DESC');
            $query = $this->db->get('Award');
            return $query->result_array();
        }
}

?>