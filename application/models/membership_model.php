<?php

class Membership_model extends CI_Model
{

    function validate()
    {
        $this->db->where('username', $this->input->post('username'));
        $this->db->where('password', md5($this->input->post('password')));
        $query = $this->db->get('membership');
        if ($query->num_rows() == 1) {
            return $query->row_array();
        }
        return false;
    }

    function create_member()
    {
        $new_member_insert_data = array(
            'email_address' => $this->input->post('email_address'),
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password')),
            'power' => $this->getpower()
        );

        $this->db->insert('membership', $new_member_insert_data);
    }

    function getpower()
    {
        $power = 0;
        for ($i = 1; $i < 11; $i++) {
            $power += intval($this->input->post('q' . $i));
        }
        return $power;
    }

}