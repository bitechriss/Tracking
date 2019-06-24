<?php

class Pengguna_model extends CI_model{

	public function getAll(){
		return $this->db->get('pengguna')->result_array();
	}

	public function validasi($namaPengguna, $kataSandi){
		$valid = FALSE;

		foreach ($this->getAll() as $pengguna) {
			if(strcmp($pengguna['namaPengguna'], $namaPengguna) == 0 && strcmp($pengguna['kataSandi'], $kataSandi) == 0){
				$valid = TRUE;
				break;
			}
		}

		return $valid;
	}

}

?>