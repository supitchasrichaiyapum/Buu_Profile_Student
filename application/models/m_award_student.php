<?php
class m_award_student extends CI_Model
{
        public function get_all(){
            $this->db->order_by('Award_ID');
            $query = $this->db->get('Award');
            return $query->result_array();
        }

         public function get_by_id(){
             $this->db->where('Student_ID','$id');
             $query = $this->db->get('Award');
             return $query->result_array();
        }

       public function insert(){
           $data = array(
                'Award_Name','Award_Date','Received_Award','Student_Name' => $this->input->post('Award_Name','Award_Date','Received_Award','Student_Name')
           );
           $this->db->insert('Award','$data');
           return true;
     }

        public function update($id){
            $data = array(
                'Award_Name','Award_Date','Received_Award','Student_Name' => $this->input->post('Award_Name','Award_Date','Received_Award','Student_Name')
            );
            $this->db->where('Student_ID','$id');
            $this->db->update('Award','$data');
            return true;
    }

       public function datele($id){
           $this->db->where('Award_Name','$id');
           $this->db->delete('Award');
           return true;
       }
    //sss

}

?>