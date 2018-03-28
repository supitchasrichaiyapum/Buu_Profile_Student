<?php
class m_student extends CI_Model
{
        public function get_student($id){
            $this->db->from('Student');
            $this->db->where('Student_ID',$id);
            $query = $this->db->get();
            return $query->result_array()[0];
        }

        public function update_datastudent($data, $student_id){
            $this->db->where('Student_ID',$student_id);
            return $this->db->update('Student',$data);
        }

        public function get_transcript($id_student){
            $sql = "Select Student.Student_ID, Subject.Subject_Code, Subject.Subject_Name, Subject_has_Student.Subject_Credit, Subject_has_Student.Grade, Subject_has_Student.Term_Number, Subject_has_Student.Subject_Year
            from Student
            INNER JOIN Subject_has_Student ON Student.Student_ID = Subject_has_Student.Student_ID
            INNER JOIN Subject ON Subject_has_Student.Subject_Code = Subject.Subject_Code
            WHERE Student.Student_ID = '".$id_student."'
            ORDER BY Subject_has_Student.Subject_Year, Subject_has_Student.Term_Number ASC";
            $query = $this->db->query($sql);            
            return $query->result();
        }

        public function get_GPA($student_id){
           $sql = "Select * from GPA
           WHERE GPA.Student_ID = '".$student_id."'";
           $query = $this->db->query($sql);            
           return $query->result();
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
            $this->db->where('Subject_Year', $array['Subject_Year']);
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
            return $this->db->replace('Student', $array);
        }
        public function add_registstudent($array) {
            return $this->db->replace('Subject_has_Student', $array);
        }
        public function add_gradstudent($array) {
            return $this->db->replace('GPA', $array);
        }
        public function update_student($student_id, $array) {
            $this->db->where('Student_ID', $student_id);
            return $this->db->update('Student', $array);
        }
        public function update_registstudent($array) {
            $this->db->where('Student_ID', $array['Student_ID']);
            $this->db->where('Subject_Code', $array['Subject_Code']);
            $this->db->where('Term_Number', $array['Term_Number']);
            $this->db->where('Subject_Year', $array['Subject_Year']);
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
            return $this->db->replace('Subject', $array);
        }
        
        public function graduate_actorstudent()
	    {
            $data['user_id'] = $this->session->userdata('user_id');
            $data['student'] = $this->m_student->get_student($data['user_id']);
            $this->template->view('student/graduate_actorstudent',$data);
	    }


}
?>