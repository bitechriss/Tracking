<?php

class CariProyek extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('Proyek_model');
	}

	public function index(){
		$data['judul'] = 'Cari Proyek';

		$data['proyek'] = $this->Proyek_model->getAll();

		if($this->input->post('cari')){
			$data['proyek'] = $this->Proyek_model->cari($this->input->post('cari', TRUE));
		}

		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar');
		$this->load->view('cariProyek/index', $data);
		$this->load->view('templates/footer');
	}

	public function tambah(){
		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('pemilik', 'pemilik', 'required');
		$this->form_validation->set_rules('lokasi', 'lokasi', 'required');
		$this->form_validation->set_rules('pimpro', 'pimpro', 'required');

		if($this->form_validation->run() == FALSE){
			redirect(base_url('CariProyek'));
		}else{
			$data = [
				"nama" =>$this->input->post('nama', TRUE),
				"pemilik" =>$this->input->post('pemilik', TRUE),
				"lokasi" =>$this->input->post('lokasi', TRUE),
				"pimpro" =>$this->input->post('pimpro', TRUE)
			];

			$this->Proyek_model->tambah($data);
			redirect(base_url('CariProyek'));
		}
	}

	public function hapus($id){
		$this->Proyek_model->hapus($id);
		redirect(base_url('CariProyek'));
	}

}

?>