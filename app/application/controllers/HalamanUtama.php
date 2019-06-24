<?php

class HalamanUtama extends CI_Controller{

	public function index(){
		$data['judul'] = 'Halaman Utama';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar');
		$this->load->view('halamanUtama/index');
		$this->load->view('templates/footer');
	}

}

?>