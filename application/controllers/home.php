<?php

/**
 * Created by PhpStorm.
 * User: W7_64
 * Date: 14-7-6
 * Time: 下午8:49
 */
class home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $data['main_content']='home';
        $this->load->view('includes/template',$data);
    }
} 