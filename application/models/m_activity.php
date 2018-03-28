<?php
class m_activity extends CI_Model
{
    
        // public function get_all(){
        //     $this->db->where('Student_Code','$id');
        //     $this->db->order_by('Award_ID');
        //     $query = $this->db->get('Award_has_Student');
        //     return $query->result_array();
        // }

        // public function get_by_id(){
        //     $this->db->where('Student_Code','$id');
        //     $query = $this->db->get('Award_has_Student');
        //     return $query->result_array();
        // }

        public function search_activity($Student_Code){

            $sql = "Select Activity.Activitie_Name, Activity.Activity_Term, Activity.Activity_Year, Activity_has_Student.Student_Student_ID, Activity.Hour, Student.MrMs, Student.Student_NameTH, Student.Student_LNameTH, Student.Course
            from Activity
            INNER JOIN Activity_has_Student ON Activity.Activitie_ID = Activity_has_Student.Activity_Activitie_ID
            INNER JOIN Student ON Activity_has_Student.Student_Student_ID = Student.Student_ID
            WHERE Activity_has_Student.Student_Student_ID = '".$Student_Code."' ";
            $query = $this->db->query($sql);            
            return $query->result();

        }

        public function get_by_id($id){

            $sql = "Select Activity.Activitie_Name, Activity.Activity_Term, Activity.Activity_Year, Activity.Hour
            from Activity
            INNER JOIN Activity_has_Student ON Activity.Activitie_ID = Activity_has_Student.Activity_Activitie_ID
            INNER JOIN Student ON Activity_has_Student.Student_Student_ID = Student.Student_ID
            WHERE Activity_has_Student.Student_Student_ID = '".$id."' ";
            $query = $this->db->query($sql);            
            return $query->result();

        }
}

?>