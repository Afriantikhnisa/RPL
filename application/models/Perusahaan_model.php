<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perusahaan_model extends CI_Model {

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
	public function data_perusahaan()
	{
		$QuerySaya 		= $this->db->query(
						  "SELECT * FROM tbl_perusahaan 
						  ORDER BY nama_perusahaan"
						);
		return $QuerySaya->result();
	}
	public function tambah_perusahaan( $id, $nama_perusahaan, $lokasi ,$posisi , $lulusan , $deskripsi ) {
		$QuerySaya 		= 	$this->db->query(
							"INSERT INTO tbl_perusahaan
							(id_perusahaan, nama_perusahaan, lokasi, posisi, lulusan, deskripsi) VALUES 
							('$id', '$nama_perusahaan', '$lokasi', '$posisi', '$lulusan', '$deskripsi');"
						);
		if ($QuerySaya) {
			return TRUE;
		} else {
			return FALSE;
		};
	}
	public function edit_perusahaan( $id, $nama_perusahaan, $lokasi , $posisi , $lulusan , $deskripsi ) {
		$QuerySaya 		= 	$this->db->query(
							"UPDATE tbl_perusahaan SET
							nama_perusahaan='$nama_perusahaan', lokasi = '$lokasi', posisi = '$posisi',lulusan = '$lulusan', deskripsi ='$deskripsi'
							WHERE id_perusahaan='$id';"
						);
		if ($QuerySaya) {
			return TRUE;
		} else {
			return FALSE;
		};
	}

	public function data_edit($id)
	{
		$QuerySaya 		= $this->db->query(
						  "SELECT * FROM tbl_perusahaan 
						  WHERE id_perusahaan='$id'"
						);
		return $QuerySaya->result();
	}

	public function hapus( $id ) {
		$QuerySaya 		= 	$this->db->query(
							"DELETE FROM tbl_perusahaan WHERE id_perusahaan = '$id'"
						);
		if ($QuerySaya) {
			return TRUE;
		} else {
			return FALSE;
		};
	}

}
