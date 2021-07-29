<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class databayi extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_bayi');

		if (!$this->session->userdata('id')) {
			redirect('logincontroller/index');
		}
	}

	public function index()
	{
		$data['data'] = $this->M_bayi->get_all();

        // keterangan untuk judul halaman
		$data['judul'] = 'Data Bayi';

		$this->load->view('admin/header');
		$this->load->view('admin/bayi/v_index', $data);
		$this->load->view('admin/footer');
	}

	public function tambah()
	{

		$data['judul'] = 'Tambah Data Bayi';
		$this->load->view('admin/header');
		$this->load->view('admin/bayi/v_tambah', $data);
		$this->load->view('admin/footer');
	}

	public function proses_tambah()
	{
		$array_databayi = array(

			'nama' => $this->input->post('nama'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'berat_lahir' => $this->input->post('berat_lahir'),
			'panjang_lahir' => $this->input->post('panjang_lahir'),
			'nama_ibu' => $this->input->post('nama_ibu'),
			'nama_ayah' => $this->input->post('nama_ayah'),
			'anak_ke' => $this->input->post('anak_ke'),
			'alamat' => $this->input->post('alamat'),

		);
		$this->M_bayi->create($array_databayi);

		//set session
		$this->session->set_flashdata('info', 'Data berhasil di tambah !');

		redirect('admin/databayi','refresh');
	}

	public function edit($id)
	{
		$data['judul'] = 'Edit Data Bayi';
		$data['databayi'] = $this->M_bayi->get_id($id);

		$this->load->view('admin/header');
		$this->load->view('admin/bayi/v_edit', $data);
		$this->load->view('admin/footer');
	}

	public function proses_edit()
	{
		$array_databayi = array(
		
			'nama' => $this->input->post('nama'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'berat_lahir' => $this->input->post('berat_lahir'),
			'panjang_lahir' => $this->input->post('panjang_lahir'),
			'nama_ibu' => $this->input->post('nama_ibu'),
			'nama_ayah' => $this->input->post('nama_ayah'),
			'anak_ke' => $this->input->post('anak_ke'),
			'alamat' => $this->input->post('alamat'),
		);
		$id = $this->input->post('id');
		$this->M_bayi->update($array_databayi, $id);
		//set session
		$this->session->set_flashdata('info', 'Data berhasil di ubah !');

		redirect('admin/databayi','refresh');
	}

	public function hapus($parameter='')
	{
        //cek dengan primary key
		$this->db->where('id', $parameter); 
		$this->db->delete('tbl_bayi');

		//set session
		$this->session->set_flashdata('info', 'Data berhasil di hapus !');

		redirect('admin/databayi','refresh');
	}

}

/* End of file User.php */
/* Location: ./application/controllers/administrator/User.php */