<?php

class Membership_model extends CI_Model{

	function validate()
	{
		$this->db->where('username',$this->input->post('username'));
		$this->db->where('password',md5($this->input->post('password')));
		$query=$this->db->get('membership');

		if($query->num_rows ==1)
		{
			return true;
		}
	}

	function create_member()
	{
		$new_member_insert_data= array(
			'email_address' => $this->input->post('email_address'),
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password'))
		);

		$insert = $this->db->insert('membership',$new_member_insert_data);
		return $insert;
	}

	function setpower()
	{
		$power = 0;
		for($i=1;$i<11;$i++){
			$power += $this->input->post('q'+$i);
		}
		//$power=$this->input->post('q1')+post('q2')+post('q3')+post('q4')+post('q5')+post('q6')+post('q7')+post('q8')+post('q9')+post('q10');
		$insert= $this->db->inseet('membership',$);
		return $insert;
	}
}