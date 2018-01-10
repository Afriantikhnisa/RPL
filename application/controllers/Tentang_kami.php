<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang_kami extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_tentang_kami');
	}

	public function index()
	{
		$this->load->view('user/v_tentang_kami'); //nama file di view
	}
	
	
}
