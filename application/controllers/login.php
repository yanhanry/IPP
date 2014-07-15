<?php

class Login extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->set_title('登录');
        $this->load_view('login_form');
    }

    public function  validate_credentials()
    {
        $this->load->model('membership_model');
        $query = $this->membership_model->validate();
        if ($query) {
            $data = array(
                'user_name' => $this->input->post('username'),
                'is_logged_in' => true
            );

            $this->session->set_userdata($data);
            redirect('');
        } else {
            $this->set_title('登录失败');
            $data['login_error'] = '用户名或密码错误';
            $this->load_view('login_form', $data);
        }
    }

    public function join()
    {
        $this->load_view('sign_up');
    }


    function create_member()
    {
        $err_msg = array();
        if (!$this->input->post('email_address')) {
            $err_msg[] = '邮箱不能为空';
        }
        if (!$this->input->post('username')) {
            $err_msg[] = '用户名不能为空';
        }
        if (!$this->input->post('password')) {
            $err_msg[] = '密码不能为空';
        }
        if ($this->input->post('password') !== $this->input->post('password2')) {
            $err_msg[] = '两次密码不相等';
        }
        if (!empty($err_msg)) {
            $this->load_view('sign_up', array('err_msg' => $err_msg));
        }

        $this->load->model('membership_model');
        if ($this->membership_model->create_member()) {
            $this->load_view('sign_up_done');
        } else {
            $this->load_view('sign_up');
        }

    }

    public function username_check($str)
    {
        $this->db->where('username', $str);
        $query = $this->db->get('membership');

        if ($query->num_rows()) {
            $this->form_validation->set_message('username_check', 'The username has already been registered.');
            return FALSE;
        } else {
            return TRUE;
        }
    }
}