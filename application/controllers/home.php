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
        $this->load_view('home', $data);
    }

    public function newfight()
    {
        if (!$this->input->post()) {
            $this->load_view('newfight');
            return;
        }

        $insert_data = array(
            'starter' => $this->user_lib->uid(),
            'enemy' => 0,
            'start_time' => 0,
            'end_time' => 0,
            'rank' => $this->user_lib->power()
        );
        $err_msg = array();
        if (!$this->input->post('start_time')) {
            $err_msg[] = '开始时间不能为空';
        } else {
            $insert_data['start_time'] = strtotime($this->input->post('start_time'));
        }
        if (!$this->input->post('end_time')) {
            $err_msg[] = '结束时间不能为空';
        } else {
            $insert_data['end_time'] = strtotime($this->input->post('end_time'));
        }
        $this->db->insert('fight', $insert_data);
        if (!empty($err_msg)) {
            $this->load_view('newfight', array('err_msg' => $err_msg));
        } else {
            $this->load_view('newfight', array('success' => 1));
        }


    }

    // 获取所有可用的fight
    private function _get_all_fight()
    {
        $sql = 'SELECT * FROM fight';
        return $this->db->query($sql)->result_array();
    }
} 