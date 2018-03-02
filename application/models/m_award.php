<?php
class m_award extends CI_Model
{
        public function get_all(){
            $this->db->order_by('Award_ID','DESC');
            $query = $this->db->get('Award');
            return $query->result_array();
        }

        public function insert(){
            $data = array(
                'Award_Name' => $this->input->post('Award_Name'),
                'Award_Date' => $this->input->post('Award_Date'),
                // 'Received_Award' => $this->input->post('Received_Award'),
                // 'Student_ID' => $this->input->post('Student_ID'),
                'Student_Name' => $this->input->post('Student_Name'),
                'Award_Term' => $this->input->post('Award_Term'),
                'Award_Course' => $this->input->post('Award_Course'),
                // 'Award_Amount' => $this->input->post('Award_Amount'),
                'Award_Owner' => $this->input->post('Award_Owner')
           );
           $this->db->insert('Award',$data);
           return true;
        }

        public function update($id){
            $data = array(
                'Award_Name' => $this->input->post('Award_Name') ,
                'Award_Date' => $this->input->post('Award_Date') ,
                'Student_Name' => $this->input->post('Student_Name'),
                'Award_Term' => $this->input->post('Award_Term'),
                'Award_Course' => $this->input->post('Award_Course'),
                'Award_Owner' => $this->input->post('Award_Owner')
            );
            $this->db->where('Award_ID',$id);
            $this->db->update('Award',$data);
            return true;
        }

        // public function delete_award(){
        //     $this->db->order_by('Award_ID','DESC');
        //     $query = $this->db->get('Award');
        //     return $query->result_array();
        // }

        public function get_by_id(){
                $this->db->where('Award_ID','$id');
                $query = $this->db->get('Award');
                return $query->result_array();
            }

        public function delete(){
            $this->db->where('Award_ID',$id);
            $this->db->delete('c_admin');
            return true;
        }
}

// public function get_all(){
//     $this->db->select('*');
//     $this->db->from('Award');
//     $this->db->join('ชื่อตารางสาขา','ชื่อตารางสาขา.ไอดีตารางสาขา = Award.FKที่อยู่ในรางวัล');
//     $this->db->order_by('Award_ID','DESC');
//     $query = $this->db->get();
//     return $query->result_array();
// }

// public function select_สาขา(){
//     $query = $this->db->get('ชื่อตารางสาขา');
//     return $query->result_array();
// }

?>