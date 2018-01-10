<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_perusahaan extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('perusahaan_model');
	}

	public function index()
	{
		$this->load->view('data_perusahaan'); //nama file di view
	}
	public function form_tambah()
	{
		$this->load->view('tambah_perusahaan'); //nama file di view
	}
	public function form_edit($id)
	{
		$data['perusahaan']	= $this->perusahaan_model->data_edit($id);
		$this->load->view('edit_perusahaan', $data); //nama file di view
	}
	public function tambah()
	{
		if (isset($_POST['nama_perusahaan'])) {
			$id		= $this->perusahaan_model->buat_kode();
			$simpan 	= $this->perusahaan_model->tambah_perusahaan( //function dari model
							$id,
							$_POST['nama_perusahaan'],
							$_POST['lokasi'],
							$_POST['posisi'],
							$_POST['lulusan'],
							$_POST['deskripsi']
						);
				
			if ($simpan) {
				$msg	= true;
			}

		}
		redirect (base_url() . 'data_perusahaan');
	}

	public function edit()
	{
		if (isset($_POST['nama_perusahaan'])) {
			$simpan 	= $this->perusahaan_model->edit_perusahaan( //function dari model
							$_POST['id_perusahaan'],
							$_POST['nama_perusahaan'],
							$_POST['lokasi'],
							$_POST['posisi'],
							$_POST['lulusan'],
							$_POST['deskripsi']
						);
				
			if ($simpan) {
				$msg	= true;
			}

		}
		redirect (base_url() . 'data_perusahaan');
	}
	public function hapus($id)
	{
		$hapus 				= $this->perusahaan_model->hapus($id);
		$msg 	= false;
		if ($hapus) {
			$msg = true;
		}
		echo json_encode($msg);
	}
	public function data() {
		$data					= $this->perusahaan_model->data_perusahaan(); //data user adalah function yang ada di model
		$hasil 					= array();
		$result 				= array();
		$nomor					= 0;
		foreach ($data as $data) {
			$nomor 				= $nomor + 1;
			$hasil[]			= array(
					'no'			=> $nomor,
					'nama_perusahaan' 		=> $data->nama_perusahaan,
					'lokasi' 				=> $data->lokasi,
					'posisi' 				=> $data->posisi,
					'lulusan' 				=> $data->lulusan,
					'deskripsi' 			=> $data->deskripsi,

										
					'action' 		=> '<div class="btn-group">
										<button id="btn-ubah" type="button" class="btn btn-warning btn-xs" 
											data-id="' 		. $data->id_perusahaan 	. '" 
											data-nama_perusahaan="' . $data->nama_perusahaan 	. '"
											data-lokasi="' . $data->lokasi 	. '"
											data-posisi="' . $data->posisi 	. '"
											data-lulusan="' . $data->lulusan 	. '"
											data-deskripsi="' 	. $data->deskripsi 	. '"
											><i class="fa fa-edit"></i></button>
								  		<button id="btn-hapus" type="button" class="btn btn-danger btn-xs" 
											data-id="' 		. $data->id_perusahaan 	. '" 
											data-nama_perusahaan="' 	. $data->nama_perusahaan 	. '" 
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
