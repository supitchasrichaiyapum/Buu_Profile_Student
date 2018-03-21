<?php
class m_teacher extends CI_Model
{
        public function get_teacher($id){
            $this->db->from('Academic_Adviser');
            $this->db->where('Teacher_ID',$id);
            $query = $this->db->get();
            return $query->result_array()[0];
            // echo $this->db->last_query(); ไว้ดูดีบัพนะไอบ้า
        }
}

?>