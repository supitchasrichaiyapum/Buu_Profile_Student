<?php
class m_data_student extends CI_Model
{
        public function get_all(){
            $this->db->order_by('Student_ID','DESC');
            $query = $this->db->get('Student');
            return $query->result_array();
        }

        public function get_by_id(){
            $this->db->where('Student_ID','$id');
            $query = $this->db->get('Student');
            return $query->result_array();
        }


       public function insert(){
           $data = array(
               'facebook' => $this->input->post('facebook')
           );
           $this->db->insert('Student','$data');
           return true;
     }

        public function update($id){
            $data = array(
                'facebook' => $this->input->post('facebook')
            );
            $this->db->where('Student_ID','$id');
            $this->db->update('Student','$data');
            return true;
        }

       public function datele($id){
           $this->db->where('Student_ID','$id');
          $this->db->delete('Student');
           return true;
       }

//กด

}

?>