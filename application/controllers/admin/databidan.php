<?php
defined('BASEPATH') or exit('No direct script access allowed');

class databidan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_bidan');

		if (!$this->session->userdata('id')) {
			redirect('logincontroller/index');
		}
	}

	public function index()
	{
		$data['data'] = $this->M_bidan->get_all();

		// keterangan untuk judul halaman
		$data['judul'] = 'Data Bidan';

		$this->load->view('admin/header');
		$this->load->view('admin/bidan/v_index', $data);
		$this->load->view('admin/footer');
	}

	public function tambah()
	{

		$data['judul'] = 'Tambah Data Bidan';
		$this->load->view('admin/header');
		$this->load->view('admin/bidan/v_tambah', $data);
		$this->load->view('admin/footer');
	}

	public function proses_tambah()
	{
		$array_databidan = array(

			'nama_bidan' => $this->input->post('nama_bidan'),
			'jadwal_praktek' => $this->input->post('jadwal_praktek'),
			'no_tlpn' => $this->input->post('no_tlpn'),
			'alamat' => $this->input->post('alamat'),


		);
		$this->M_bidan->create($array_databidan);

		//set session
		$this->session->set_flashdata('info', 'Data berhasil di tambah !');

		redirect('admin/databidan', 'refresh');
	}

	public function edit($id)
	{
		$data['judul'] = 'Edit Data Bidan';
		$data['databidan'] = $this->M_bidan->get_id($id);

		$this->load->view('admin/header');
		$this->load->view('admin/bidan/v_edit', $data);
		$this->load->view('admin/footer');
	}

	public function proses_edit()
	{
		$array_databidan = array(


			'nama_bidan' => $this->input->post('nama_bidan'),
			'jadwal_praktek' => $this->input->post('jadwal_praktek'),
			'no_tlpn' => $this->input->post('no_tlpn'),
			'alamat' => $this->input->post('alamat'),

		);
		$id = $this->input->post('id');
		$this->M_bidan->update($array_databidan, $id);
		//set session
		$this->session->set_flashdata('info', 'Data berhasil di ubah !');

		redirect('admin/databidan', 'refresh');
	}

	public function hapus($parameter = '')
	{
		//cek dengan primary key
		$this->db->where('id', $parameter);
		$this->db->delete('tbl_bidan');

		//set session
		$this->session->set_flashdata('info', 'Data berhasil di hapus !');

		redirect('admin/databidan', 'refresh');
	}

}

/* End of file User.php */
/* Location: ./application/controllers/administrator/User.php */
