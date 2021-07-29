<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class datapasien extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_pasien');

		if (!$this->session->userdata('id')) {
			redirect('logincontroller/index');
		}
	}

	public function index()
	{
		$data['data'] = $this->M_pasien->get_all();

        // keterangan untuk judul halaman
		$data['judul'] = 'Data Ibu Hamil';

		$this->load->view('admin/header');
		$this->load->view('admin/pasien/v_index', $data);
		$this->load->view('admin/footer');
	}

	public function tambah()
	{


		$data['judul'] = 'Tambah Data Ibu Hamil ';
		$this->load->view('admin/header');
		$this->load->view('admin/pasien/v_tambah', $data);
		$this->load->view('admin/footer');
	}

	public function proses_tambah()
	{
		$array_pasien = array(

			'nama_lengkap' => $this->input->post('nama_lengkap'),
			'nama_suami' => $this->input->post('nama_suami'),
			'alamat' => $this->input->post('alamat'),
			'tgl_periksa' => $this->input->post('tgl_periksa'),
			'umur' => $this->input->post('umur'),
			'usia_kehamilan' => $this->input->post('usia_kehamilan'),
			'taksiran_persalinan' => $this->input->post('taksiran_persalinan'),
			
		);
		$this->M_pasien->create($array_pasien);

		//set session
		$this->session->set_flashdata('info', 'Data berhasil di tambah !');

		redirect('admin/datapasien','refresh');
	}

	public function edit($id)
	{
		$data['judul'] = 'Edit Data Ibu Hamil';
		$data['datapasien'] = $this->M_pasien->get_id($id);

		$this->load->view('admin/header');
		$this->load->view('admin/pasien/v_edit', $data);
		$this->load->view('admin/footer');
	}

	public function proses_edit()
	{
		$array_pasien = array(

			'tgl_periksa' => $this->input->post('tgl_periksa'),
			'nama_lengkap' => $this->input->post('nama_lengkap'),
			'nama_suami' => $this->input->post('nama_suami'),
			'umur' => $this->input->post('umur'),
			'alamat' => $this->input->post('alamat'),
			'usia_kehamilan' => $this->input->post('usia_kehamilan'),
			'taksiran_persalinan' => $this->input->post('taksiran_persalinan'),
		);
		$id = $this->input->post('id');
		$this->M_pasien->update($array_pasien, $id);
		//set session
		$this->session->set_flashdata('info', 'Data berhasil di ubah !');

		redirect('admin/datapasien','refresh');
	}

	public function hapus($parameter='')
	{
        //cek dengan primary key
		$this->db->where('id', $parameter); 
		$this->db->delete('tbl_ibuhamil');

		//set session
		$this->session->set_flashdata('info', 'Data berhasil di hapus !');

		redirect('admin/datapasien','refresh');
	}

}

/* End of file User.php */
/* Location: ./application/controllers/administrator/User.php */