<?php

/**
 * Created by PhpStorm.
 * User: W7_64
 * Date: 14-7-6
 * Time: 下午8:49
 */
class home extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load_view('home');
    }

    public function newfight()
    {
        var_dump($_POST);
        echo strtotime('07/14/2014 2:20 PM');// this work
    }
} 