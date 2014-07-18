<?php
class Fight extends CI_Controller{

	function index()
	{
		$this->load->view('login_form');
	}

	function fight_validate_credentials()
	{
		$this->load->model('membership_model');
		$login=$this->session->userdata('is_logged_in');


		if($login)
		{
			
		}

		else
		{
			echo "Please login to have the fight. ";
		}
	}
}