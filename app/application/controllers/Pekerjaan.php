<?php

class Pekerjaan extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('Pekerjaan_model');
	}

	public function index($idProyek){
		$this->session->set_userdata('idProyek', $idProyek);
		$data['judul'] = 'Pekerjaan';

		

		$data['pekerjaan'] = $this->Pekerjaan_model->getAll($this->session->userdata('idProyek'));
		$data['detil'] = [
			"kode" => NULL,
			"nama" => NULL,
			"biayaPengerjaan" => NULL,
			"tanggalMulai" => NULL,
			"tanggalSelesai" => NULL,
			"finishAktual" => NULL,
			"biayaAktual" => NULL,
			"idProyek" => NULL,
			"finishRencana" => NULL
		];
		if($this->input->post('detil')){
			$data['detil'] = $this->Pekerjaan_model->detil($this->input->post('detil'));
		}


		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar');
		$this->load->view('pekerjaan/index', $data);
		$this->load->view('templates/footer');
	}

	public function ubah(){
		$data = [
			"kode" => $this->input->post('kode'),
			"nama" => $this->input->post('nama'),
			"biayaPengerjaan" => $this->input->post('biayaPengerjaan'),
			"tanggalMulai" => $this->input->post('tanggalMulai'),
			"tanggalSelesai" => $this->input->post('tanggalSelesai'),
			"finishAktual" => $this->input->post('finishAktual'),
			"biayaAktual" => $this->input->post('biayaAktual'),
			"idProyek" => $this->input->post('idProyek'),
			"finishRencana" => $this->input->post('finishRencana')
		];

		$this->Pekerjaan_model->ubah($data);
		redirect(base_url('Pekerjaan/index/'.$this->session->userdata('idProyek')));

	}

	public function tambah(){
		$data = [
			"kode" => $this->input->post('kode'),
			"nama" => $this->input->post('nama'),
			"biayaPengerjaan" => $this->input->post('biayaPengerjaan'),
			"tanggalMulai" => $this->input->post('tanggalMulai'),
			"tanggalSelesai" => $this->input->post('tanggalSelesai'),
			"finishAktual" => $this->input->post('finishAktual'),
			"biayaAktual" => $this->input->post('biayaAktual'),
			"idProyek" => $this->session->userdata('idProyek'),
			"finishRencana" => $this->input->post('finishRencana')
		];

		$this->Pekerjaan_model->tambah($data);
		redirect(base_url('Pekerjaan/index/'.$this->session->userdata('idProyek')));
	}

	public function hapus($kode){
		$this->Pekerjaan_model->hapus($kode);
		redirect(base_url('Pekerjaan/index/'.$this->session->userdata('idProyek')));
	}

}

?>