<?php

class Login extends CI_Controller
{

    function index()
    {
        $data['main_content'] = 'login_form';
        $this->load->view('includes/template', $data);
    }

    function validate_credentials()
    {
        $this->load->model('membership_model');
        $query = $this->membership_model->validate();


        if ($query) {
            $data = array(
                'user_name' => $this->input->post('username'),
                'is_logged_in' => true
            );

            $this->session->set_userdata($data);
            redirect('site/members_area');
        } else {
            $data['main_content'] = 'login_form';
            $data['login_error'] = '用户名或密码错误';
            $this->load->view('includes/template', $data);
        }
    }

    function signup()
    {
        $data['main_content'] = 'signup_form';
        $this->load->view('includes/template', $data);
    }


    function create_member()
    {

        $this->load->library('form_validation');

        $this->form_validation->set_rules('email_address', 'Email Address', 'trimlrequired|valid_email');


        $this->form_validation->set_rules('username', 'Username', 'trimlrequired|min_length[4]|callback_username_check');
        $this->form_validation->set_rules('password', 'Password', 'trimlrequired|min_length[4]|max_length[32]');
        $this->form_validation->set_rules('password2', 'Password Confirmation', 'trimlrequired|matches[password]');
        if ($this->form_validation->run() == FALSE) {
            $this->signup();
        } else {
            $this->load->model('membership_model');
            if ($query = $this->membership_model->create_member()) {
                $data['main_content'] = 'signup_successful';
                $this->load->view('includes/template', $data);
            } else {
                $this->load->view('signup_form');
            }
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