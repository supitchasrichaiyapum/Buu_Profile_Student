<?php
class M_login extends CI_Model {

    // public function get($code)
    // {
    //     $this->db->where('Student_ID', $code);
    //     $this->db->where('Teacher_ID', $code);
    //     $this->db->where('Admin_ID', $code);
    //     $thus->db->from($this->student);
    //     $query = $this->db->get();
    //     return $query->result()[0];
    // }

    // login แบบหลอกๆ
    // public function xlogin($username, $password)
    // {
    //     if($username == 'nutthanon9') {
    //         $data = array();
    //         $data['fullname'] = 'nutthanon';
    //         $data['login_type'] = 'Teacher';
    //         $data['login_value'] = 'nutthanon';
    //     }
    //      else if($username == 'kamonwans9') {
    //         $data = array();
    //         $data['fullname'] = 'kamonwans';
    //         $data['login_type'] = 'Admin';
    //         $data['login_value'] = 'kamonwans';
    //     }
    //     return $data;
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
        $this->db->from('Academic_Adviser');
        $query = $this->db->get();
        return $query->result();
    }

    public function check_admin($code)
    {
        $this->db->where('Admin_ID', $code);
        $this->db->from('Staff');
        $query = $this->db->get();
        return $query->result();
    }
}
?>