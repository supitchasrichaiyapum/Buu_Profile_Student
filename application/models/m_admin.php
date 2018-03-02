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
            $this->db->insert('Faculty', $array);
            return $this->db->insert_id();
        }

        public function search_faculty($faculty_name) {
            $this->db->where('Faculty_Name', $faculty_name);
            $this->db->from('Faculty');
            $query = $this->db->get();
            return $query->result_array();
        }
}

?>