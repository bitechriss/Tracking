<?php

class Laporan extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('Pekerjaan_model');
	}

	public function index(){
		$data['judul'] = 'Laporan';

		$data['pekerjaan'] = $this->Pekerjaan_model->getAll($this->session->userdata('idProyek'));

		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar');
		$this->load->view('laporan/index', $data);
		$this->load->view('templates/footer');
	}

}

?>