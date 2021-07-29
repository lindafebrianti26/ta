<?php 

class laporankb extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_kb');

    if (!$this->session->userdata('id')) {
      redirect('logincontroller/index');
    }
  }

  public function index(){
    $this->load->view('admin/header');
    $this->load->view('admin/v_laporan');
    $this->load->view('admin/footer');
  }

  public function cetakKeluargaKb(){
    $data['data'] = $this->M_kb->get_all();
    $this->load->view('admin/cetak/v_cetakkeluargakb', $data);
  }
    }