<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();

	}
	public function buat_kode() {
		$QuerySaya 		= 	$this->db->query(
							"SELECT MAX(id_user) AS idmax 
							FROM tbl_user;"
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
	public function data_user()
	{
		$QuerySaya 		= $this->db->query(
						  "SELECT * FROM tbl_user 
						  ORDER BY username"
						);
		return $QuerySaya->result();
	}
	public function tambah_user( $id, $username, $password , $level ) {
		$QuerySaya 		= 	$this->db->query(
							"INSERT INTO tbl_user
							(id_user, username, password, level) VALUES 
							('$id', '$username', '$password','$level');"
						);
		if ($QuerySaya) {
			return TRUE;
		} else {
			return FALSE;
		};
	}
	public function edit_user( $id, $username, $password , $level ) {
		$QuerySaya 		= 	$this->db->query(
							"UPDATE tbl_user SET
							username='$username', password = '$password', level ='$level'
							WHERE id_user='$id';"
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
						  "SELECT * FROM tbl_user 
						  WHERE id_user='$id'"
						);
		return $QuerySaya->result();
	}

	public function hapus( $id ) {
		$QuerySaya 		= 	$this->db->query(
							"DELETE FROM tbl_user WHERE id_user = '$id'"
						);
		if ($QuerySaya) {
			return TRUE;
		} else {
			return FALSE;
		};
	}

}
