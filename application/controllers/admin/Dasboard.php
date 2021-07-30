<?php

class Dasboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		if (!$this->session->userdata('id')) {
			redirect('logincontroller/index');
		}
	}

	public function index()
	{
		$data['bayi'] = $this->db->query('Select * from tbl_bayi')->num_rows();
		$data['bidan'] = $this->db->query('Select * from tbl_bidan')->num_rows();
		$data['hamil'] = $this->db->query('Select * from tbl_ibuhamil')->num_rows();
		$data['lahir'] = $this->db->query('Select * from tbl_ibumelahirkan')->num_rows();
		$data['data'] = $this->db->query("SELECT COUNT(nama_lengkap) as jml, MONTHNAME(tgl_periksa) as bulan FROM `tbl_ibuhamil` GROUP BY month(tgl_periksa)")->result_array();
		$this->load->view('admin/header');
		$this->load->view('admin/index', $data);
		$this->load->view('admin/footer');
	}
}
 	 
