<?php

class logincontroller extends CI_Controller {
public function __construct()
    {
        parent::__construct();
        $this->load->model('M_users');
        $this->load->library('form_validation');
    }
	 public function index(){

		$this->load->view('login');
	}
        public function proses(){
        	$input_email = $this->input->post('txtemail');
        	$input_pass = $this->input->post('txtpassword');


        	$cek = $this->M_users->get_user($input_email, $input_pass);

        	if ($cek){

        		
        		$data_session= array(
                'id' => $cek['id'],
                'nama' => $cek['nama']
            );

        		$this->session->set_userdata($data_session);
        		redirect('admin/dasboard/index');
        	} else {

        		$this->session->set_flashdata('pesan','maaf,email atau password salah');
        		redirect('logincontroller/index');
        	}
        }

        public function proses_logout()
        {

        session_destroy();
        redirect('logincontroller/index');
        
        }
}