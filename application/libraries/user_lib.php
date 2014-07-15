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
        if ($this->ci->membership_model->validate()) {
            $data = array(
                'user_name' => $this->ci->input->post('username'),
                'login' => true
            );

            $this->ci->session->set_userdata($data);
            return TRUE;
        }
        return FALSE;
    }

    public function logout()
    {
        $this->session->destroy();
    }

    public function is_login()
    {
        $name = $this->ci->session->userdata('user_name');
        return !empty($name);
    }
} 