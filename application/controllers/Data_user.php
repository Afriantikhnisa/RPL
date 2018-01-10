<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_user extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}
	public function logout() {
		$this->session->sess_destroy();
		redirect (base_url());
	}
	public function index()
	{
		$this->load->view('data_user'); //nama file di view
	}
	public function form_tambah()
	{
		$this->load->view('tambah_user'); //nama file di view
	}
	public function form_edit($id)
	{
		$data['user']	= $this->user_model->data_edit($id);
		$this->load->view('edit_user', $data); //nama file di view
	}
	public function tambah()
	{
		if (isset($_POST['username'])) {
			$id		= $this->user_model->buat_kode();
			$simpan 	= $this->user_model->tambah_user( //function dari model
							$id,
							$_POST['username'],
							$_POST['password'],
							$_POST['level']
						);
				
			if ($simpan) {
				$msg	= true;
			}

		}
		redirect (base_url() . 'data_user');
	}

	public function edit()
	{
		if (isset($_POST['username'])) {
			$simpan 	= $this->user_model->edit_user( //function dari model
							$_POST['id_user'],
							$_POST['username'],
							$_POST['password'],
							$_POST['level']
						);
				
			if ($simpan) {
				$msg	= true;
			}

		}
		redirect (base_url() . 'data_user');
	}
	public function hapus($id)
	{
		$hapus 				= $this->user_model->hapus($id);
		$msg 	= false;
		if ($hapus) {
			$msg = true;
		}
		echo json_encode($msg);
	}
	public function data() {
		$data					= $this->user_model->data_user(); //data user adalah function yang ada di model
		$hasil 					= array();
		$result 				= array();
		$nomor					= 0;
		foreach ($data as $data) {
			$nomor 				= $nomor + 1;
			$hasil[]			= array(
					'no'			=> $nomor,
					'username' 			=> $data->username,
					'password' 			=> $data->password,
					'level' 			=> $data->level,

										
					'action' 		=> '<div class="btn-group">
										<button id="btn-ubah" type="button" class="btn btn-warning btn-xs" 
											data-id="' 		. $data->id_user 	. '" 
											data-username="' 	. $data->username 	. '"
											data-password="' 	. $data->password 	. '"
											data-level="' 	. $data->level 	. '"
											><i class="fa fa-edit"></i></button>
								  		<button id="btn-hapus" type="button" class="btn btn-danger btn-xs" 
											data-id="' 		. $data->id_user 	. '" 
											data-username="' 	. $data->username 	. '" 
											><i class="fa fa-trash-o"></i></button>
										</div>'
				);
		}
		$result 				= array (
				'aaData' 			=> $hasil
			);
		echo json_encode($result);
	}

}
