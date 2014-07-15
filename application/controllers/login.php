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

    public function logout()
    {
        $this->user_lib->logout();
        echo 'logout!';
        redirect(site_url());
    }

    public function  validate_credentials()
    {
        if ($this->user_lib->login()) {
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
        // 检查是否重名
        if (!$this->username_check($this->input->post('username'))) {
            $err_msg[] = '用户名: ' . $this->input->post('username') . ' 已被注册';
        }
        // TODO:检测邮箱

        if (!empty($err_msg)) {
            $this->load_view('sign_up', array('err_msg' => $err_msg));
            return;
        }

        $this->load->model('membership_model');

        $this->membership_model->create_member();
        $this->load_view('sign_up_done');


    }

    public function username_check($str)
    {
        $this->db->where('username', $str);
        $query = $this->db->get('membership');

        if ($query->num_rows()) {
            return FALSE;
        } else {
            return TRUE;
        }
    }
}