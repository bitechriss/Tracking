<?php

class Login extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('Pengguna_model');
	}

	public function index(){
		$data['judul'] = 'Login';

		$this->load->view('templates/header', $data);
		$this->load->view('login/index');
		$this->load->view('templates/footer');
	}

	public function validasi(){
		$this->form_validation->set_rules('namaPengguna', 'namaPengguna', 'required');
		$this->form_validation->set_rules('kataSandi', 'kataSandi', 'required');

		if($this->form_validation->run() == FALSE){
			redirect(base_url('Login'));
		}else if($this->Pengguna_model->validasi($this->input->post('namaPengguna'), $this->input->post('kataSandi')) == TRUE){
			redirect(base_url('HalamanUtama'));
		}else{
			redirect(base_url('Login'));
		}
	}

}

?>