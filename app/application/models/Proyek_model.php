<?php

class Proyek_model extends CI_model{

	public function getAll(){
		return $this->db->get('proyek')->result_array();
	}

	public function cari($kataKunci){
		$this->db->where('nama', $kataKunci);
		$this->db->or_where('pemilik', $kataKunci);
		$this->db->or_where('lokasi', $kataKunci);
		$this->db->or_where('pimpro', $kataKunci);

		return $this->db->get('proyek')->result_array();
	}

	public function tambah($data){
		$this->db->insert('proyek', $data);
	}

	public function hapus($id){
		$this->db->where('id', $id);
		$this->db->delete('proyek');
	}

}

?>