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
        $data['fights'] = $this->_get_all_fight();
        $this->load_view('home',$data);
    }

    public function newfight()
    {
        var_dump($_POST);
        echo strtotime('07/14/2014 2:20 PM');// this work
    }

    // 获取所有可用的fight
    private function _get_all_fight(){
        $sql = 'SELECT * FROM fight';
        return $this->db->query($sql)->result_array();
    }
} 