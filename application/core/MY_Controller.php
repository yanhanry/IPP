<?php

class MY_Controller extends CI_Controller
{
    private $data;

    public function __construct()
    {
        parent::__construct();
    }

    public function set_title($title)
    {
        $this->data['title'] = $title;
    }

    public function load_view($view_name, $data = array())
    {
        $data = array_merge($data, $this->data);
        $this->load->view('includes/header', $data);
        $this->load->view($view_name);
        $this->load->view('includes/footer');
    }
} 