<?php
class m_student extends CI_Model
{
        public function get_student($id){
            $this->db->from('Student');
            $this->db->where('Student_ID',$id);
            $query = $this->db->get();
            return $query->result_array()[0];
        }
        public function search_student($student_id) {
            $this->db->where('Student_ID', $student_id);
            $this->db->from('Student');
            $query = $this->db->get();
            return $query->result_array();
        }
        public function search_registstudent($array) {
            $this->db->where('Student_ID', $array['Student_ID']);
            $this->db->where('Subject_Code', $array['Subject_Code']);
            $this->db->where('Term_Number', $array['Term_Number']);
            $this->db->from('Subject_has_Student');
            $query = $this->db->get();
            return $query->result_array();
        }
        public function search_gradstudent($array) {
            $this->db->where('Student_ID', $array['Student_ID']);
            $this->db->where('GPA_Year', $array['GPA_Year']);
            $this->db->where('GPA_Term', $array['GPA_Term']);
            $this->db->from('GPA');
            $query = $this->db->get();
            return $query->result_array();
        }
        public function add_student($array) {
            return $this->db->insert('Student', $array);
        }
        public function add_registstudent($array) {
            return $this->db->insert('Subject_has_Student', $array);
        }
        public function add_gradstudent($array) {
            return $this->db->insert('GPA', $array);
        }
        public function update_student($student_id, $array) {
            $this->db->where('Student_ID', $student_id);
            return $this->db->update('Student', $array);
        }
        public function update_registstudent($array) {
            $this->db->where('Student_ID', $array['Student_ID']);
            $this->db->where('Subject_Code', $array['Subject_Code']);
            $this->db->where('Term_Number', $array['Term_Number']);
            return $this->db->update('Subject_has_Student', $array);
        }
        public function update_gradstudent($array) {
            $this->db->where('Student_ID', $array['Student_ID']);
            $this->db->where('GPA_Year', $array['GPA_Year']);
            $this->db->where('GPA_Term', $array['GPA_Term']);
            return $this->db->update('GPA', $array);
        }
        public function search_subject($subject_code) {
            $this->db->where('Subject_Code', $subject_code);
            $this->db->from('Subject');
            $query = $this->db->get();
            return $query->result_array();
        }
        public function insert_subject($array) {
            return $this->db->insert('Subject', $array);
        }
        // public function add_regis($array) {
        //     return $this->db->insert('Subject_has_Student', $array);            
        // }
        // public function add_grad($array) {
        //     return $this->db->insert('GPA', $array);            
        // }
}
?>