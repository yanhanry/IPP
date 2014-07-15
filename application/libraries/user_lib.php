<?php


class user_lib
{
    private $ci;

    public function __construct()
    {
        $this->ci = & get_instance();
    }

    public function login()
    {
        $this->ci->load->model('membership_model');
        $user_data = $this->ci->membership_model->validate();
        if (is_array($user_data) AND !empty($user_data)) {
            $data = array(
                'user_name' => $this->ci->input->post('username'),
                'login' => true,
                'uid'=> $user_data['id'],
                'power'=>$user_data['power']
            );
            $this->ci->session->set_userdata($data);
            return TRUE;
        }
        return FALSE;
    }

    public function logout()
    {
        $this->ci->session->sess_destroy();
    }

    public function is_login()
    {
        $name = $this->ci->session->userdata('user_name');
        return !empty($name);
    }

    public function name(){
        return $this->ci->session->userdata('user_name');
    }
    public function uid(){
        return $this->ci->session->userdata('uid');
    }

    public function power(){
        return $this->ci->session->userdata('power');
    }
} 