<?php

class Pekerjaan_model extends CI_model{

	public function getAll($idProyek){
		$this->db->where('idProyek', $idProyek);
		return $this->db->get('pekerjaan')->result_array();
	}

	public function detil($kode){
		$this->db->where('kode', $kode);

		return $this->db->get('pekerjaan')->result_array()[0];
	}

	public function ubah($data){
		$this->db->where('kode', $data['kode']);
		$this->db->update('pekerjaan', $data);
	}

	public function tambah($data){
		$this->db->insert('pekerjaan', $data);
	}

	public function hapus($kode){
		$this->db->where('kode', $kode);
		$this->db->delete('pekerjaan');
	}

}

?>