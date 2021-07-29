<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class datakb extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_kb');

		if (!$this->session->userdata('id')) {
			redirect('logincontroller/index');
		}
	}

	public function index()
	{
		$data['data'] = $this->M_kb->get_all();

        // keterangan untuk judul halaman
		$data['judul'] = 'Data KB';

		$this->load->view('admin/header');
		$this->load->view('admin/kb/v_index', $data);
		$this->load->view('admin/footer');
	}

	public function tambah()
	{

		$data['judul'] = 'Tambah Data KB';
		$this->load->view('admin/header');
		$this->load->view('admin/kb/v_tambah', $data);
		$this->load->view('admin/footer');
	}

	public function proses_tambah()
	{
		$array_datakb = array(

			'nama' => $this->input->post('nama'),
			'nama_suami' => $this->input->post('nama_suami'),
			'jumlah_anak' => $this->input->post('jumlah_anak'),
			'jenis_kontrasepsi' => $this->input->post('jenis_kontrasepsi'),
			
		);
		$this->M_kb->create($array_datakb);

		//set session
		$this->session->set_flashdata('info', 'Data berhasil di tambah !');

		redirect('admin/datakb','refresh');
	}

	public function edit($id)
	{
		$data['judul'] = 'Edit Data KB';
		$data['datakb'] = $this->M_kb->get_id($id);

		$this->load->view('admin/header');
		$this->load->view('admin/kb/v_edit', $data);
		$this->load->view('admin/footer');
	}

	public function proses_edit()
	{
		$array_datakb = array(

			'nama' => $this->input->post('nama'),
			'nama_suami' => $this->input->post('nama_suami'),
			'jumlah_anak' => $this->input->post('jumlah_anak'),
			'jenis_kontrasepsi' => $this->input->post('jenis_kontrasepsi'),
			
		);
		$id = $this->input->post('id');
		$this->M_kb->update($array_datakb, $id);
		//set session
		$this->session->set_flashdata('info', 'Data berhasil di ubah !');

		redirect('admin/datakb','refresh');
	}

	public function hapus($parameter='')
	{
        //cek dengan primary key
		$this->db->where('id', $parameter); 
		$this->db->delete('tbl_kb');

		//set session
		$this->session->set_flashdata('info', 'Data berhasil di hapus !');

		redirect('admin/datakb','refresh');
	}

}

/* End of file User.php */
/* Location: ./application/controllers/administrator/User.php */