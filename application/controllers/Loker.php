<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loker extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_loker');
	}

	public function index()
	{
		$posisi = $this->input->post('posisi');
		$lulusan = $this->input->post('lulusan');
		
		if($posisi == ''){
			$data['loker']					= $this->m_loker->d_perusahaan(); //data user adalah function yang ada di model	
		}else if($lulusan == ''){
			$data['loker']					= $this->m_loker->d_perusahaan(); //data user adalah function yang ada di model	
		}else {
			$data['loker']					= $this->m_loker->data_cari($posisi,$lulusan); //data user adalah function yang ada di model
		}
		$this->load->view('user/v_loker',$data); //nama file di view
	}
	public function cari()
	{
		// $QuerySaya 		= $this->db->query(
		// 				  "SELECT * FROM tbl_perusahaan 
		// 				  WHERE posisi=(posisi) and lulusan=(lulusan)
		// 				  "
		// 				);
		// return $QuerySaya->result();
		if (isset($_POST['cari'])) {
		$array = array('posisi' => $posisi, 'lulusan' => $lulusan);
		$this->db->where($array);
		}
	}
	public function data() {
		$posisi = $this->input->post('posisi');
		$lulusan = $this->input->post('lulusan');
		
		if($posisi == ''){
			$data['loker']					= $this->m_loker->d_perusahaan(); //data user adalah function yang ada di model	
		}else if($lulusan == ''){
			$data['loker']					= $this->m_loker->d_perusahaan(); //data user adalah function yang ada di model	
		}else {
			$data['loker']					= $this->m_loker->data_cari($posisi,$lulusan); //data user adalah function yang ada di model
		}
		$this->load->view('user/v_loker', $data);
		// $hasil 					= array();
		// $result 				= array();
		// $nomor					= 0;
		// foreach ($data as $data) {
		// 	$nomor 				= $nomor + 1;
		// 	$hasil[]			= array(
		// 			'no'			=> $nomor,
		// 			'nama_perusahaan' 		=> $data->nama_perusahaan,
		// 			'lokasi' 				=> $data->lokasi,
		// 			'posisi' 				=> $data->posisi,
		// 			'lulusan' 				=> $data->lulusan,
		// 			'deskripsi' 			=> $data->deskripsi,

										
		// 			'action' 		=> '<div class="btn-group">
		// 								<button id="btn-ubah" type="button" class="btn btn-warning btn-xs" 
		// 									data-id="' 		. $data->id_perusahaan 	. '" 
		// 									data-nama_perusahaan="' . $data->nama_perusahaan 	. '"
		// 									data-lokasi="' . $data->lokasi 	. '"
		// 									data-posisi="' . $data->posisi 	. '"
		// 									data-lulusan="' . $data->lulusan 	. '"
		// 									data-deskripsi="' 	. $data->deskripsi 	. '"
		// 									><i class="fa fa-edit"></i></button>
		// 						  		<button id="btn-hapus" type="button" class="btn btn-danger btn-xs" 
		// 									data-id="' 		. $data->id_perusahaan 	. '" 
		// 									data-nama_perusahaan="' 	. $data->nama_perusahaan 	. '" 
		// 									><i class="fa fa-trash-o"></i></button>
		// 								</div>'
		// 		);
		// }
		// $result 				= array (
		// 		'aaData' 			=> $hasil
		// 	);
		// echo json_encode($result);
	}

	public function data_cari($posisi,$lulusan) {

		// if($_POST['posisi']==''){
		// 	$data					= $this->m_loker->d_perusahaan(); //data user adalah function yang ada di model
		// 	$hasil 					= array();
		// 	$result 				= array();
		// 	$nomor					= 0;
		// 	foreach ($data as $data) {
		// 		$nomor 				= $nomor + 1;
		// 		$hasil[]			= array(
		// 				'no'			=> $nomor,
		// 				'nama_perusahaan' 		=> $data->nama_perusahaan,
		// 				'lokasi' 				=> $data->lokasi,
		// 				'posisi' 				=> $data->posisi,
		// 				'lulusan' 				=> $data->lulusan,
		// 				'deskripsi' 			=> $data->deskripsi,

											
		// 				'action' 		=> '<div class="btn-group">
		// 									<button id="btn-ubah" type="button" class="btn btn-warning btn-xs" 
		// 										data-id="' 		. $data->id_perusahaan 	. '" 
		// 										data-nama_perusahaan="' . $data->nama_perusahaan 	. '"
		// 										data-lokasi="' . $data->lokasi 	. '"
		// 										data-posisi="' . $data->posisi 	. '"
		// 										data-lulusan="' . $data->lulusan 	. '"
		// 										data-deskripsi="' 	. $data->deskripsi 	. '"
		// 										><i class="fa fa-edit"></i></button>
		// 							  		<button id="btn-hapus" type="button" class="btn btn-danger btn-xs" 
		// 										data-id="' 		. $data->id_perusahaan 	. '" 
		// 										data-nama_perusahaan="' 	. $data->nama_perusahaan 	. '" 
		// 										><i class="fa fa-trash-o"></i></button>
		// 									</div>'
		// 			);
		// 	}
		// 	$result 				= array (
		// 		'aaData' 			=> $hasil
		// 	);

		// }else{
			// $data					= $this->m_loker->d_perusahaan($posisi,$lulusan); //data user adalah function yang ada di model
			// $hasil 					= array();
			// $result 				= array();
			// $nomor					= 0;
			// foreach ($data as $data) {
			// 	$nomor 				= $nomor + 1;
			// 	$hasil[]			= array(
			// 			'no'			=> $nomor,
			// 			'nama_perusahaan' 		=> $data->nama_perusahaan,
			// 			'lokasi' 				=> $data->lokasi,
			// 			'posisi' 				=> $data->posisi,
			// 			'lulusan' 				=> $data->lulusan,
			// 			'deskripsi' 			=> $data->deskripsi,

											
			// 			'action' 		=> '<div class="btn-group">
			// 								<button id="btn-ubah" type="button" class="btn btn-warning btn-xs" 
			// 									data-id="' 		. $data->id_perusahaan 	. '" 
			// 									data-nama_perusahaan="' . $data->nama_perusahaan 	. '"
			// 									data-lokasi="' . $data->lokasi 	. '"
			// 									data-posisi="' . $data->posisi 	. '"
			// 									data-lulusan="' . $data->lulusan 	. '"
			// 									data-deskripsi="' 	. $data->deskripsi 	. '"
			// 									><i class="fa fa-edit"></i></button>
			// 						  		<button id="btn-hapus" type="button" class="btn btn-danger btn-xs" 
			// 									data-id="' 		. $data->id_perusahaan 	. '" 
			// 									data-nama_perusahaan="' 	. $data->nama_perusahaan 	. '" 
			// 									><i class="fa fa-trash-o"></i></button>
			// 								</div>'
			// 		);
			// }
			// $result 				= array (
			// 	'aaData' 			=> $hasil
			// );
		// }
		// echo json_encode($result);
	}

}
