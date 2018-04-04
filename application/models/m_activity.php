<?php
class m_activity extends CI_Model
{
    

        public function search_activity($Student_Code){

            $sql = "Select Activity.Activitie_Name, Activity.Activity_Term, Activity.Activity_Year, Activity_has_Student.Student_Student_ID, Activity.Hour, Student.Student_Prefix, Student.Student_Name_Th, Student.Student_Lname_Th, Student.Course
            from Activity
            INNER JOIN Activity_has_Student ON Activity.Activitie_ID = Activity_has_Student.Activity_Activitie_ID
            INNER JOIN Student ON Activity_has_Student.Student_Student_ID = Student.Student_ID
            WHERE Activity_has_Student.Student_Student_ID = '".$Student_Code."' ";
            $query = $this->db->query($sql);            
            return $query->result();
        }

        public function search_student_activity($Student_Code){
            $sql = "SELECT Activity.Activitie_Name, Activity.Activity_Term, Activity.Activity_Year, Activity_has_Student.Student_Student_ID, Activity.Hour, Student.Student_Prefix, Student.Student_Name_Th, Student.Student_Lname_Th, Student.Course
                    FROM Activity
                    INNER JOIN Activity_has_Student ON Activity.Activitie_ID = Activity_has_Student.Activity_Activitie_ID
                    INNER JOIN Student ON Activity_has_Student.Student_Student_ID = Student.Student_ID
                    WHERE Activity_has_Student.Student_Student_ID LIKE '".$Student_Code."'";
            $query = $this->db->query($sql);            
            return $query->result();
        }

        public function get_by_student_id($id){

            $sql = "Select Activity.Activitie_Name, Activity.Activity_Term, Activity.Activity_Year, Activity.Hour
            from Activity
            INNER JOIN Activity_has_Student ON Activity.Activitie_ID = Activity_has_Student.Activity_Activitie_ID
            INNER JOIN Student ON Activity_has_Student.Student_Student_ID = Student.Student_ID
            WHERE Activity_has_Student.Student_Student_ID = '".$id."' ";
            $query = $this->db->query($sql);            
            return $query->result();

        }

        public function get_all(){
            $sql = "Select Activity.Activitie_ID,Activity.Activitie_Name, Activity.Activity_Term, Activity.Activity_Year,Activity.Hour, Activity_has_Student.Student_Student_ID, Student.Student_Prefix, Student.Student_Name_Th, Student.Student_Lname_Th
            from Activity 
            INNER JOIN Activity_has_Student ON Activity.Activitie_ID = Activity_has_Student.Activity_Activitie_ID 
            INNER JOIN Student ON Activity_has_Student.Student_Student_ID = Student.Student_ID";
            $query = $this->db->query($sql);            
            return $query->result();
        }

        public function get_all_activity(){
            $this->db->from('Activity');
            $query = $this->db->get();           
            return $query->result_array();
        }

        public function get_by_id_activity_has_student(){
           
            $this->db->from('Activity_has_Student');
            $query = $this->db->get();           
            return $query->result_array();
        }

        public function get_activity_by_id($id){
            $sql = "Select Activity.Activitie_ID,Activity.Activitie_Name, Activity.Activity_Term, Activity.Activity_Year,Activity.Hour, Activity_has_Student.Student_Student_ID, Student.Student_Prefix, Student.Student_Name_Th, Student.Student_Lname_Th
            from Activity 
            INNER JOIN Activity_has_Student ON Activity.Activitie_ID = Activity_has_Student.Activity_Activitie_ID 
            INNER JOIN Student ON Activity_has_Student.Student_Student_ID = Student.Student_ID
            WHERE Activity.Activitie_ID= '".$id."' ";
            $query = $this->db->query($sql);           
            return $query->result();
        }

        // แก้ไขข้อมูลรางวัลการแข่งขัน
        public function update_activity($data, $activity_id){
            $this->db->where('Activitie_ID', $activity_id);
            return $this->db->update('Activity',$data);
        }

        // ลบกิจกรรม
        public function delete_activity_has_student($id){
            $this->db->where('Student_Student_ID',$id);
            $this->db->delete('Activity_has_Student');
            return true;
        }

        public function get_by_id($id){
                $this->db->where('Activitie_ID',$id);
                $query = $this->db->get('Activity');
                return $query->result_array();
        }
        
        public function insert_activity($data){
                return $this->db->insert('Activity',$data);
        }

        public function insert_student_activity($data){
                return $this->db->insert('Activity_has_Student',$data);
        }

}

?>