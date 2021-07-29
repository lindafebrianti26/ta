<?php 

class kalender extends CI_Controller{

   public function index($tahun = NULL, $bulan = NULL)
   {
      $kalender = array(
      	'start_day'           => 'monday',
      	'show_next_prev'      => TRUE,
      	'next_prev_url'       => base_url()."index.php/kalender/index"
      	
      	
      );

       $this->load->library('calendar',$kalender);

       $data['kalender']   = $this->calendar->generate($tahun, $bulan);

       $this->load->view('kalender_view', $data);
   }
 }
