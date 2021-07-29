<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class datapeserta extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_peserta');

		if (!$this->session->userdata('id')) {
			redirect('logincontroller/index');
		}
	}

	public function index()
	{
		$data['data'] = $this->M_peserta->get_all();

        // keterangan untuk judul halaman
		$data['judul'] = 'Data Peserta KB';

		$this->load->view('admin/header');
		$this->load->view('admin/peserta/v_index', $data);
		$this->load->view('admin/footer');
	}

	public function tambah()
	{

		$data['judul'] = 'Tambah Data Peserta KB';
		$this->load->view('admin/header');
		$this->load->view('admin/peserta/v_tambah', $data);
		$this->load->view('admin/footer');
	}

	public function proses_tambah()
	{
		$array_datapeserta = array(

			'tgl_daftar' => $this->input->post('tgl_daftar'),
			'nama_ibu' => $this->input->post('nama_ibu'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'umur' => $this->input->post('umur'),
			'alamat' => $this->input->post('alamat'),
			'no_tlpn' => $this->input->post('no_tlpn'),
		
		);
		$this->M_peserta->create($array_datapeserta);

		//set session
		$this->session->set_flashdata('info', 'Data berhasil di tambah !');

		redirect('admin/datapeserta','refresh');
	}

	public function edit($id)
	{
		$data['judul'] = 'Edit Data Peserta KB';
		$data['datapeserta'] = $this->M_peserta->get_id($id);

		$this->load->view('admin/header');
		$this->load->view('admin/peserta/v_edit', $data);
		$this->load->view('admin/footer');
	}

	public function proses_edit()
	{
		$array_datapeserta = array(

			
			'tgl_daftar' => $this->input->post('tgl_daftar'),
			'nama_ibu' => $this->input->post('nama_ibu'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'umur' => $this->input->post('umur'),
			'alamat' => $this->input->post('alamat'),
			'no_tlpn' => $this->input->post('no_tlpn'),
			
		);
		$id = $this->input->post('id');
		$this->M_peserta->update($array_datapeserta, $id);
		//set session
		$this->session->set_flashdata('info', 'Data berhasil di ubah !');

		redirect('admin/datapeserta','refresh');
	}

	public function hapus($parameter='')
	{
        //cek dengan primary key
		$this->db->where('id', $parameter); 
		$this->db->delete('tbl_peserta');

		//set session
		$this->session->set_flashdata('info', 'Data berhasil di hapus !');

		redirect('admin/datapeserta','refresh');
	}

}

/* End of file User.php */
/* Location: ./application/controllers/administrator/User.php */