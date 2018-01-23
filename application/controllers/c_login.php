<?php

class c_login extends CI_Controller {
    public function login()
    {
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
 
            $this->session->set_userdata('user_id', $userdata['code']);
            //set userdata, actor = teahcer
            //redirect($this->serssion->user_Data('actor').'/welcome');
            redirect('welcome');
        } else {
            echo 'error';
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('c_login/login');
    }
}