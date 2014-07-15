<?php

/**
 * Created by PhpStorm.
 * User: w7_64
 * Date: 14-7-15
 * Time: 下午4:21
 */
class fight_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_starter_fights($uid)
    {

    }

    public function get_enemy_fights($uid)
    {

    }

    public function get_all_fights()
    {
        $sql = 'SELECT fight.*,membership.username FROM fight
        JOIN membership ON fight.starter = membership.id
        ';
        return $this->db->query($sql)->result_array();
    }

    public function get_all_available_fights()
    {
        $sql = 'SELECT fight.*,membership.username FROM fight
        JOIN membership ON fight.starter = membership.id
        WHERE  fight.enemy = 0
        ';
        return $this->db->query($sql)->result_array();
    }
} 