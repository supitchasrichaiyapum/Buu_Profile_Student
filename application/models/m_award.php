<?php
class m_award extends CI_Model
{
        public function get_all(){
            $sql = "Select Award.Award_ID,Award.Award_Name, Award.Award_Term, Award.Award_Year, Award_has_Student.Award_Date, Award_has_Student.Student_ID, Student.Prefix, Student.Student_NameTH, Student.Student_LNameTH, Award.Award_Amount, Award.Award_Giver 
            from Award 
            INNER JOIN Award_has_Student ON Award.Award_ID = Award_has_Student.Award_ID 
            INNER JOIN Student ON Award_has_Student.Student_ID = Student.Student_ID";
            $query = $this->db->query($sql);            
            return $query->result();
        }
        public function get_all_award(){
            $this->db->from('Award');
            $query = $this->db->get();           
            return $query->result_array();
        }
        public function get_by_id_award_has_student(){
           
            $this->db->from('Award_has_Student');
            $query = $this->db->get();           
            return $query->result_array();
        }

        public function get_Award_by_id($id){
            $sql = "Select Award.Award_ID,Award.Award_Name, Award.Award_Term, Award.Award_Year, Award_has_Student.Award_Date, Award_has_Student.Student_ID, Student.Prefix, Student.Student_NameTH, Student.Student_LNameTH, Award.Award_Amount, Award.Award_Giver 
            from Award 
            INNER JOIN Award_has_Student ON Award.Award_ID = Award_has_Student.Award_ID 
            INNER JOIN Student ON Award_has_Student.Student_ID = Student.Student_ID
            WHERE Award.Award_ID= '".$id."' ";
            $query = $this->db->query($sql);           
            return $query->result();
        }

        public function get_Award_by_student($id){
            $sql = "Select Award.Award_ID,Award.Award_Name, Award.Award_Term, Award.Award_Year, Award_has_Student.Award_Date, Award_has_Student.Student_ID, Award.Award_Amount, Award.Award_Giver 
            from Award 
            INNER JOIN Award_has_Student ON Award.Award_ID = Award_has_Student.Award_ID 
            INNER JOIN Student ON Award_has_Student.Student_ID = Student.Student_ID
            WHERE Award_has_Student.Student_ID = '".$id."' ";
            $query = $this->db->query($sql);           
            return $query->result();
        }

        // แก้ไขข้อมูลรางวัลการแข่งขัน
        public function update_award($data, $award_id){
            $this->db->where('Award_ID', $award_id);
            return $this->db->update('Award',$data);
        }
        // ลบรางวัลการแข่งขัน
        public function delete_award_has_student($id){
            $this->db->where('Student_ID',$id);
            $this->db->delete('Award_has_Student');
            return true;
        }
        public function get_by_id($id){
                $this->db->where('Award_ID',$id);
                $query = $this->db->get('Award');
                return $query->result_array();
            }
        
            public function insert_award($data){
                return $this->db->insert('Award',$data);
            }
            public function insert_student_award($data){
                return $this->db->insert('Award_has_Student',$data);
            }

        
}



?>