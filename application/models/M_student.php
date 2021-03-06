<?php
class M_student extends CI_Model
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

        public function status($ID_Student){
            $sql = "SELECT Status.Status_Name 
            FROM Student 
            INNER JOIN Status ON Student.Status_ID = Status.Status_ID 
            WHERE Student.Student_ID = $ID_Student";
            $query = $this->db->query($sql);            
            return $query->result_array()[0];
        }

        public function get_transcript($id_student){
            $sql = "Select Subject.Subject_Code, Subject.Subject_Name, Subject_has_Student.Subject_Credit, Subject_has_Student.Grade, Subject_has_Student.Term_Number, Subject_has_Student.Subject_Year
            from Student
            INNER JOIN Subject_has_Student ON Student.Student_ID = Subject_has_Student.Student_ID
            INNER JOIN Subject ON Subject_has_Student.Subject_Code = Subject.Subject_Code
            WHERE Student.Student_ID = '".$id_student."'
            ORDER BY Subject_has_Student.Subject_Year, Subject_has_Student.Term_Number";
            $query = $this->db->query($sql);            
            return $query->result();
        }

        public function get_year_transcript($id_student)
        {
            $sql = "select GPA_Term, GPA_Year FROM GPA where Student_ID = '".$id_student."'order by GPA_Year ASC";
            $query = $this->db->query($sql);            
            return $query->result();
        }

        public function get_GPA_Year($id_student)
        {
            $sql = "SELECT GPA_Year 
            FROM GPA 
            WHERE Student_ID = '".$id_student."' 
            ORDER BY GPA_Year DESC LIMIT 0,1";
            $query = $this->db->query($sql);            
            return $query->result();
        }

        public function get_GPA($student_id){
           $sql = "Select * from GPA
           WHERE GPA.Student_ID = '".$student_id."'";
           $query = $this->db->query($sql);            
           return $query->result();
        }

        public function get_Adviser($student_id){
            $sql = "Select Adviser.Adviser_Prefix, Adviser.Adviser_Name, Adviser.Adviser_Lname from Adviser
            WHERE Adviser.Student_ID = '".$student_id."'";
            $query = $this->db->query($sql);            
            return $query->result();
         }

        public function search_student($Student_Text){
            $sql = "SELECT Student.Student_ID, Student.Student_Prefix, Student.Student_Name_Th, Student.Student_Lname_Th, Student.Course, Student.Status_ID, Status.Status_Name
                    FROM Student
                    INNER JOIN Status ON Student.Status_ID = Status.Status_ID
                    WHERE (Student.Student_ID LIKE '".$Student_Text."')
                    OR (Student.Student_Name_Th LIKE '".$Student_Text."') 
                    OR (Student.Student_Lname_Th LIKE '".$Student_Text."') ";
            $query = $this->db->query($sql);            
            return $query->result();
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
        public function search_grade($array) {
            $this->db->where('Student_ID', $array['Student_ID']);
            $this->db->where('GPAX', $array['GPAX']);
            $this->db->from('Student');
            $query = $this->db->get();
            return $query->result_array();
        }
        public function search_adviser($array) {
            $this->db->where('Adviser_ID', $array['Adviser_ID']);
            $this->db->where('Student_ID', $array['Student_ID']);
            $this->db->where('Adviser_Prefix', $array['Adviser_Prefix']);
            $this->db->where('Adviser_Name', $array['Adviser_Name']);
            $this->db->where('Adviser_Lname', $array['Adviser_Lname']);
            $this->db->from('Adviser');
            $query = $this->db->get();
            return $query->result_array();
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
        public function update_grade($array) {
            $this->db->where('Student_ID', $array['Student_ID']);
            unset($array['Student_ID']);
            return $this->db->update('Student', $array);
        }
        public function update_adviser($array) {
            $this->db->where('Adviser_ID', $array['Adviser_ID']);
            $this->db->where('Student_ID', $array['Student_ID']);
            $this->db->where('Adviser_Prefix', $array['Adviser_Prefix']);
            $this->db->where('Adviser_Name', $array['Adviser_Name']);
            $this->db->where('Adviser_Lname', $array['Adviser_Lname']);
            unset($array['Student_ID']);
            return $this->db->update('Adviser', $array);
        }
        

        public function search_subject($subject_code) {
            $this->db->where('Subject_Code', $subject_code);
            $this->db->from('Subject');
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

        public function add_grade($array) {
            return $this->db->insert('Student', $array);
        }

        public function add_adviser($array) {
            return $this->db->insert('Adviser', $array);
        }

        public function graduate_actorstudent()
	    {
            $data['user_id'] = $this->session->userdata('user_id');
            $data['student'] = $this->m_student->get_student($data['user_id']);
            $this->template->view('student/graduate_actorstudent',$data);
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

        // หน่วยกิตรวม
        public function ca_student($student_id){
            $sql = "SELECT sum(Subject_Credit) as sum
            FROM Subject_has_Student 
            WHERE Student_ID = '".$student_id."' AND Grade != 'F' AND Grade != 'W' AND Grade != ''";
            $query = $this->db->query($sql);            
            return $query->result();
        }
        
        


}
?>