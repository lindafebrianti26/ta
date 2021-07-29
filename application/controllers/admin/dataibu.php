<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dataibu extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_ibu');

		if (!$this->session->userdata('id')) {
			redirect('logincontroller/index');
		}
	}

	public function index()
	{
		$data['data'] = $this->M_ibu->get_all();

        // keterangan untuk judul halaman
		$data['judul'] = 'Data Ibu Bersalin';

		$this->load->view('admin/header');
		$this->load->view('admin/dataibu/v_index', $data);
		$this->load->view('admin/footer');
	}

	public function tambah()
	{

		$data['judul'] = 'Tambah Data Ibu Bersalin';
		$this->load->view('admin/header');
		$this->load->view('admin/dataibu/v_tambah', $data);
		$this->load->view('admin/footer');
	}

	public function proses_tambah()
	{
		$array_dataibu = array(

			'nama_ibu' => $this->input->post('nama_ibu'),
			'nama_suami' => $this->input->post('nama_suami'),
			'umur' => $this->input->post('umur'),
			'alamat' => $this->input->post('alamat'),
			'cara_persalinan' => $this->input->post('cara_persalinan'),
			'kondisi_ibu' => $this->input->post('kondisi_ibu'),
			'berat_bayi' => $this->input->post('berat_bayi'),
			'panjang_bayi' => $this->input->post('panjang_bayi'),
			'kondisi_bayi' => $this->input->post('kondisi_bayi'),

		);
		$this->M_ibu->create($array_dataibu);

		//set session
		$this->session->set_flashdata('info', 'Data berhasil di tambah !');

		redirect('admin/dataibu','refresh');
	}

	public function edit($id)
	{
		$data['judul'] = 'Edit Data Ibu Bersalin';
		$data['dataibu'] = $this->M_ibu->get_id($id);

		$this->load->view('admin/header');
		$this->load->view('admin/dataibu/v_edit', $data);
		$this->load->view('admin/footer');
	}

	public function proses_edit()
	{
		$array_dataibu = array(

			
			'nama_ibu' => $this->input->post('nama_ibu'),
			'nama_suami' => $this->input->post('nama_suami'),
			'umur' => $this->input->post('umur'),
			'alamat' => $this->input->post('alamat'),
			'cara_persalinan' => $this->input->post('cara_persalinan'),
			'kondisi_ibu' => $this->input->post('kondisi_ibu'),
			'berat_bayi' => $this->input->post('berat_bayi'),
			'panjang_bayi' => $this->input->post('panjang_bayi'),
			'kondisi_bayi' => $this->input->post('kondisi_bayi'),
		);
		$id = $this->input->post('id');
		$this->M_ibu->update($array_dataibu, $id);
		//set session
		$this->session->set_flashdata('info', 'Data berhasil di ubah !');

		redirect('admin/dataibu','refresh');
	}

	public function hapus($parameter='')
	{
        //cek dengan primary key
		$this->db->where('id', $parameter); 
		$this->db->delete('tbl_ibumelahirkan');

		//set session
		$this->session->set_flashdata('info', 'Data berhasil di hapus !');

		redirect('admin/dataibu','refresh');
	}

}

/* End of file User.php */
/* Location: ./application/controllers/administrator/User.php */