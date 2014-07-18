<?php

/**
 * Class home
 *
 * @property fight_model fight_model
 */
class home extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('fight_model');
    }

    public function index()
    {
        $data['fights'] = $this->fight_model->get_all_available_fights();
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
            $insert_data['start_time'] = date("Y-m-d H:i:s", strtotime($this->input->post('start_time')));
        }
        if (!$this->input->post('end_time')) {
            $err_msg[] = '结束时间不能为空';
        } else {
            $insert_data['end_time'] = date("Y-m-d H:i:s", strtotime($this->input->post('end_time')));
        }
        $this->db->insert('fight', $insert_data);
        if (!empty($err_msg)) {
            $this->load_view('newfight', array('err_msg' => $err_msg));
        } else {
            $this->load_view('newfight', array('success' => 1));
        }


    }

    public function joinfight()
    {
        $fight_id = $this->input->get('fightid');
        $fight_sql = 'SELECT * FROM fight WHERE id = ?';
        $fight = $this->db->query($fight_sql, array($fight_id))->row_array();
        if (!empty($fight)) {
            var_dump($fight);
        }
        $data = array();
        $err_msg = array();
        if ($fight['starter'] == $this->user_lib->uid()) {
            $err_msg[] = '请不要自己跟自己打，这么寂寞，去写代码吧,反正也找不到妹子。。。';
        }
        if ($fight['enemy'] != 0) {
            $err_msg[] = '已经有人跟他干了，抱歉';
        }

        $this->load->library('mailer');

        // 发邮件 需要到 application/libraries/mailer.php里改发送信箱
        // 获取发起人的信息
        $sql = 'SELECT * FROM membership WHERE id=?';
        $starter = $this->db->query($sql, array($fight['starter']))->row_array();
        $opt = array('name' => $starter['username'],
            'dst' => $starter['email_address'],
            'content' =>
                '羽梯上的 ' .
                $this->user_lib->name() .
                ' 邀请你打球'.
                '开始时间  '. $fight['start_time'] .'  ' .
                '结束时间 '. $fight['end_time']
            //TODO:具体的时间和地点
        );

        if (!$this->mailer->send($opt)) {
            $err_msg[] = '无法发送邮件';
        }


        if (!empty($err_msg)) {
            $data['err_msg'] = $err_msg;
        } else {
            $this->db->where('id', $fight_id);
            $this->db->update('fight', array(
                'enemy' => $this->user_lib->uid()
            ));
            $data['success'] = TRUE;
        }
        $this->load_view('joinfight', $data);
        return;
    }

    // 获取所有可用的fight
    private function _get_all_fight()
    {

    }


} 