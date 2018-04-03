<?php
class m_scholarship extends CI_Model
{
    public function get_all(){
        $sql = "Select Scholarship.Scholarship_ID,Scholarship.Scholarship_Name, Scholarship.Scholarship_Giver, Scholarship.Scholarship_Amount, Scholarship_has_Student.Student_ID, Student.Prefix, Student.Student_NameTH, Student.Student_LNameTH, Student.Course
        from Scholarship 
        INNER JOIN Scholarship_has_Student ON Scholarship.Scholarship_ID = Scholarship_has_Student.Scholarship_ID 
        INNER JOIN Student ON Scholarship_has_Student.Student_ID = Student.Student_ID";
        $query = $this->db->query($sql);            
        return $query->result();
    }
    public function get_all_scholarship(){
        $this->db->from('Scholarship');
        $query = $this->db->get();           
        return $query->result_array();
    }
    public function get_by_id_scholarship_has_student(){
       
        $this->db->from('Scholarship_has_Student');
        $query = $this->db->get();           
        return $query->result_array();
    }

    public function get_Scholarship_by_id($id){
        $sql = "Select Scholarship.Scholarship_ID,Scholarship.Scholarship_Name, Scholarship.Scholarship_Giver, Scholarship.Scholarship_Amount, Scholarship_has_Student.Student_ID, Student.Prefix, Student.Student_NameTH, Student.Student_LNameTH, Student.Course
        from Scholarship 
        INNER JOIN Scholarship_has_Student ON Scholarship.Scholarship_ID = Scholarship_has_Student.Scholarship_ID 
        INNER JOIN Student ON Scholarship_has_Student.Student_ID = Student.Student_ID
        WHERE Scholarship.Scholarship_ID= '".$id."' ";
        $query = $this->db->query($sql);           
        return $query->result();
    }

    // ส่วนไปแสดงข้อมูลในนิสิต
    public function get_Scholarship_by_student($id){
        $sql = "Select Scholarship.Scholarship_ID,Scholarship.Scholarship_Name, Scholarship.Scholarship_Giver, Scholarship.Scholarship_Amount
        from Scholarship 
        INNER JOIN Scholarship_has_Student ON Scholarship.Scholarship_ID = Scholarship_has_Student.Scholarship_ID 
        INNER JOIN Student ON Scholarship_has_Student.Student_ID = Student.Student_ID
        WHERE Scholarship_has_Student.Student_ID = '".$id."' ";
        $query = $this->db->query($sql);           
        return $query->result();
    }
    
    // แก้ไขข้อมูลทุนการศึกษา
    public function update_scholarship($data, $scholarship_id){
        $this->db->where('Scholarship_ID', $scholarship_id);
        return $this->db->update('Scholarship',$data);
    }
    // ลบทุนการศึกษา
    public function delete_scholarship_has_student($id){
        $this->db->where('Student_ID',$id);
        $this->db->delete('Scholarship_has_Student');
        return true;
    }

    public function get_by_id($id){
            $this->db->where('Scholarship_ID',$id);
            $query = $this->db->get('Scholarship');
            return $query->result_array();
        }
    
        public function insert_scholarship($data){
            return $this->db->insert('Scholarship',$data);
        }
        public function insert_student_scholarship($data){
            return $this->db->insert('Scholarship_has_Student',$data);
        }
}
?>