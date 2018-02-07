<?php
class m_teacher extends CI_Model
{
        public function get_teacher($id){
            $this->db->from('Teacher');
            $this->db->where('Teacher_ID',$id);
            $query = $this->db->get();
            // echo $this->db->last_query(); ไว้ดูดีบัพนะไอบ้า
            return $query->result_array()[0];
        }
}

?>