<?php
class c_login extends CI_Controller {
     
    public function login()
    {
        if($this->session->userdata('actor')) {
            redirect('welcome');
            die();
        }
        $data['status'] = $this->input->get('status');
        $this->load->view('login', $data);
    }
    public function post_login() 
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $this->ldap->connect();
        if($this->ldap->authenticate('' , $username, $password)) {
            $userdata = $this->ldap->get_data($username,$password);
            //print_r($userdata);
            if($userdata['ou'] == 'students') {
                //student
                $data['fullname'] = $userdata['fname'].' '.$userdata['lname'];                
                if($this->m_login->check_student($userdata['code'])) {
                    //student
                    $data['login_type'] = 'Student';
                    $data['login_value'] = $userdata['code'];
                }
            } else if($userdata['ou'] == 'staff') {
                //teacher and officer
                //check in teacher
                $teacher = $this->m_login->check_teacher($userdata['code']);                
                if($teacher) {
                    $data['login_type'] = 'Teacher';
                    $data['login_value'] = $userdata['code'];                        
                } else {
                    $admin = $this->m_login->check_admin($userdata['code']);
                    if($admin) {
                        $data['login_type'] = 'Admin';
                        $data['login_value'] = $userdata['code'];                        
                    }
                }
            } //else {
                //test login
                //return $this->xlogin($username, $password);
            //}                          
                $this->session->set_userdata('actor', $data['login_type']);
                $this->session->set_userdata('user_id', $data['login_value']);
                //print_r($this->session->userdata());
                redirect('welcome');
        } else {
            echo 'error';
        }
                //print_r($userdata);
                // die();
    } 
            

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('welcome');
    }
}
?>