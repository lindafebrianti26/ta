<?php

class Register extends CI_Controller {

public function __construct()
	{
		parent::__construct();
		$this->load->model('M_users');
		$this->load->library('form_validation');
	}


	public function index()
	{	

		// Rules / aturan untuk form nama
		$this->form_validation->set_rules('name', 'Nama', 'required',
			array('required' => '{field} harus diisi'));

	

		// Rules / aturan untuk form email
		$this->form_validation->set_rules('email','Email','required|valid_email',
			array('required' => '{field} harus diisi',
				'valid_email' => 'Email anda tidak valid'));

		// Rules / aturan untuk password
		$this->form_validation->set_rules('password','Password','required|alpha_numeric|min_length[8]|matches[confirm]');

		$this->form_validation->set_rules('confirm','Konfirmasi','required|matches[password]');



		if($this->form_validation->run() == false){

			$this->load->view('registrasi');

		}else {
			$array_user = array(
				'nama' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password'),
			);

			$this->M_users->create($array_user);
			$this->session->set_flashdata('pesan', 'Proses Registrasi Berhasil');
			redirect('logincontroller');
		}
	}

}

