<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct() {
        parent::__construct();
        $this->load->model("Db_model");
        $this->load->model("Booking_model");
        $session_data =$this->session->userdata('login_data');
            if(empty($session_data)){
                redirect("login");
            }
        
    }
    
    
     public function index() {
        //   $sdata = $this->session->userdata("login_data");
        // $utype = !empty($sdata['setusertype'])?$sdata['setusertype']:"";
        // $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        // $fix_uri_segment = 3;     // fixurisegment = $page not 0
        //   $sessiondata = $this->session->userdata('session_data');
        //   $per_page = !empty($sessiondata['pagerecords']) ?$sessiondata['pagerecords']: 10;
        // $pagination_url = site_url('charity/index');
        // $page_data = $this->Charity_model->get_charities($per_page, $page, NULL);
        

        // $count_total_rows = $this->Charity_model->count_charities();

        // $data = $this->Db_model->pagination_data($pagination_url, 'products', $count_total_rows, $per_page, $fix_uri_segment, $page, $page_data);

        //  if(!empty($utype)){$data['setusertype']=$utype;}
       
      
        // $data['pages'] = 'manage_charity';
       
        // /* ---------------------------------------------------- */
        // $this->load->view('layout', $data);
        
    }
     


     public function manage_booking() {
          $sdata = $this->session->userdata("login_data");

          $bktype = !empty($sdata['setbookingtype'])?$sdata['setbookingtype']:"";

      
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $fix_uri_segment = 3;     // fixurisegment = $page not 0
          $sessiondata = $this->session->userdata('session_data');
          $per_page = !empty($sessiondata['pagerecords']) ?$sessiondata['pagerecords']: 10;
        $pagination_url = site_url('booking/manage_booking');
        $page_data = $this->Booking_model->get_booking_data($per_page, $page, NULL);
        

        $count_total_rows = $this->Booking_model->count_booking_data();

        $data = $this->Db_model->pagination_data($pagination_url, 'products', $count_total_rows, $per_page, $fix_uri_segment, $page, $page_data);

              
         if(!empty($bktype)){$data['setbookingtype']=$bktype;}       
      
        $data['pages'] = 'manage_booking';
       
        /* ---------------------------------------------------- */
        $this->load->view('layout', $data);
        
    }
       


public function set_booking_type(){
        $booking_type = $this->input->post("booking_type");
        
        $session_data = $this->session->userdata('login_data');
       $session_data['setbookingtype'] = $booking_type;
        $this->session->set_userdata("login_data", $session_data);

        die;
    }


}
