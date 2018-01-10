<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();

	}

	public function login_masuk ($user,$pass)
	{
		$QuerySaya 		= 	$this->db->query (
							"SELECT * FROM tbl_user 
							WHERE username='$user'
							AND password='$pass';"
						);
		if ($QuerySaya->num_rows() == 0) {
			return FALSE;
		} else {
			$data 		= $QuerySaya->row();
			$this->session->set_userdata('id_user', 	$data->id_user);
			$this->session->set_userdata('username', 	$data->username);
			$this->session->set_userdata('password', 	$data->password);
			$this->session->set_userdata('level', 	$data->level);
			
			return TRUE;
		}
	}

}
