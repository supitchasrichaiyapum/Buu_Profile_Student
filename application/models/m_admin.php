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

        public function search_student($Student_Code){
            $sql = "Select *
            from Student
            WHERE Student.Student_ID = '".$Student_Code."' ";
            $query = $this->db->query($sql);            
            return $query->result();
        }

        public function search_student_status($Student_id)
        {
            $sql = "SELECT Status.Status_Name 
            FROM Student 
            INNER JOIN Status ON Student.Status_ID = Status.Status_ID
            WHERE Student.Student_ID = '".$Student_id."' ";
            $query = $this->db->query($sql);            
            return $query->result();
        }

        // โปรสูง โปรต่ำ
        public function search_student_between_gpax($gpax_low, $gpax_high){
            $this->db->where('Status_ID', 10);
            $this->db->where('GPAX >= ', $gpax_low);
            $this->db->where('GPAX <= ', $gpax_high);
            $this->db->from('Student');
            $query = $this->db->get();
            return $query->result_array();
        }
        
        
}
?>