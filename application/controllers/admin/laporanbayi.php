<?php 

class laporanbayi extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_bayi');

    if (!$this->session->userdata('id')) {
      redirect('logincontroller/index');
    }
  }

  public function index(){
    $this->load->view('admin/header');
    $this->load->view('admin/v_laporan');
    $this->load->view('admin/footer');
  }

  public function cetakBayi(){
    $data['data'] = $this->M_bayi->get_all();
    $this->load->view('admin/cetak/v_cetakbayi', $data);
  }
    }