  <?php

 class Dasboard extends CI_Controller{

 	  public function index(){

		$data['data'] = $this->db->query("SELECT COUNT(nama_lengkap) as jml, MONTHNAME(tgl_periksa) as bulan FROM `tbl_ibuhamil` GROUP BY month(tgl_periksa)")->result_array();

 		$this->load->view('admin/header');
 		$this->load->view('admin/index', $data);
 		$this->load->view('admin/footer');
 		
 	}
 	   
}
 	 
