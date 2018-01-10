<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_perusahaan extends CI_Model {

	public function __construct()
	{
		parent::__construct();

	}
	public function buat_kode() {
		$QuerySaya 		= 	$this->db->query(
							"SELECT MAX(id_perusahaan) AS idmax 
							FROM tbl_perusahaan;"
						);
		$kode 			= 	"";
		if ($QuerySaya->num_rows()>0){
			foreach($QuerySaya->result() as $k){
				$tmp 	= 	((int)$k->idmax)+1;
				$kode 	= 	str_pad($tmp, 1, STR_PAD_LEFT);
			}
		} else {
			$kode 		= 	"1";
		}
		return $kode;
	}
	public function d_perusahaan()
	{
		$QuerySaya 		= $this->db->query(
						  "SELECT * FROM tbl_perusahaan 
						  ORDER BY nama_perusahaan"
						);
		return $QuerySaya->result();
	}


}
