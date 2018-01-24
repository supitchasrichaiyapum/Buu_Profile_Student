<?php
class m_login extends CI_Model {
    // public function get($code)
    // {
    //     $this->db->where('Student_ID', $code);
    //     $this->db->where('Teacher_ID', $code);
    //     $this->db->where('Admin_ID', $code);
    //     $thus->db->from($this->student);
    //     $query = $this->db->get();
    //     return $query->result()[0];
    // }

    public function check_student($code)
    {
        $this->db->where('Student_ID', $code);
        $this->db->from('Student');
        $query = $this->db->get();
        return $query->result();
    }

    public function check_teacher($code)
    {
        $this->db->where('Teacher_ID', $code);
        $this->db->from('Teacher');
        $query = $this->db->get();
        return $query->result();
    }

    public function check_admin($code)
    {
        $this->db->where('Admin_ID', $code);
        $this->db->from('Admin');
        $query = $this->db->get();
        return $query->result();
    }
}
?>