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

            $sql = "Select Activity.Activitie_Name, Activity.Activity_Term, Activity.Activity_Year, Activity_has_Student.Student_Student_ID, Activity.Hour 
            from Activity
            INNER JOIN Activity_has_Student ON Activity.Activitie_ID = Activity_has_Student.Activity_Activitie_ID
            WHERE Activity_has_Student.Student_Student_ID = '".$Student_Code."' ";
            $query = $this->db->query($sql);            
            return $query->result();

        }
    
}

?>