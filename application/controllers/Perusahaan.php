<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perusahaan extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_perusahaan');
	}

	public function index()
	{
		$this->load->view('user/v_perusahaan'); //nama file di view
	}
	
	public function data() {
		$data					= $this->m_perusahaan->d_perusahaan(); //data user adalah function yang ada di model
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
