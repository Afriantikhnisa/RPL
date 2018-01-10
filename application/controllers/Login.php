<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
	}
	public function index()
	{
		// $this->load->view('login');
		if ($this->session->userdata('id_user')== Null) {
			$this->load->view('login');
		} else {
			if ($this->session->userdata('level')=='Admin') {
				$this->load->view('dashboard');
			} else {
				$kode 				= $this->session->userdata('id_user');
				$this->load->view('user\user_dashboard');
			}
		}
	}
	public function masuk()
	{
		$data 			= $this->login_model->login_masuk(
							$_POST['username'],
							$_POST['password']
						);
		redirect (base_url());
	}


	public function logout() {
		$this->session->sess_destroy();
		redirect (base_url());
	}	
}
