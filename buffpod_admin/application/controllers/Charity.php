<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Charity extends CI_Controller {

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
        $this->load->model("Charity_model");
        $session_data =$this->session->userdata('login_data');
            if(empty($session_data)){
                redirect("login");
            }
        
    }
    
    
     public function index() {
          $sdata = $this->session->userdata("login_data");
        $utype = !empty($sdata['setusertype'])?$sdata['setusertype']:"";
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $fix_uri_segment = 3;     // fixurisegment = $page not 0
          $sessiondata = $this->session->userdata('session_data');
          $per_page = !empty($sessiondata['pagerecords']) ?$sessiondata['pagerecords']: 10;
        $pagination_url = site_url('charity/index');
        $page_data = $this->Charity_model->get_charities($per_page, $page, NULL);
        

        $count_total_rows = $this->Charity_model->count_charities();

        $data = $this->Db_model->pagination_data($pagination_url, 'products', $count_total_rows, $per_page, $fix_uri_segment, $page, $page_data);

         if(!empty($utype)){$data['setusertype']=$utype;}
       
      
        $data['pages'] = 'manage_charity';
       
        /* ---------------------------------------------------- */
        $this->load->view('layout', $data);
        
    }
     
        
     public function view_subcharity() {
         
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $fix_uri_segment = 3;     // fixurisegment = $page not 0
          $sessiondata = $this->session->userdata('session_data');
          $per_page = !empty($sessiondata['pagerecords']) ?$sessiondata['pagerecords']: 10;
        $pagination_url = site_url('charity/view_subcharity');
        $page_data = $this->Charity_model->get_sub_charities($per_page, $page, NULL);
        

        $count_total_rows = $this->Charity_model->count_sub_charities();

        $data = $this->Db_model->pagination_data($pagination_url, 'products', $count_total_rows, $per_page, $fix_uri_segment, $page, $page_data);

         if(!empty($utype)){$data['setusertype']=$utype;}
       
      
        $data['pages'] = 'view_sub_charity';
       
        /* ---------------------------------------------------- */
        $this->load->view('layout', $data);
        
    }




   
   
    
    public function add_charity() {
                $this->form_validation->set_rules('charity_name', 'charity name', 'required');
                $this->form_validation->set_rules('status', 'status', 'required');
                
                 $prv_c_id =  $this->uri->segment(3);
                 
                if ($this->form_validation->run() == FALSE)
                {
                            if(!empty($prv_c_id)){
                                $data['prv_charity'] = $this->Db_model->get_records_by_id("bp_charity",true,array("id"=>$prv_c_id),"*","","");
                            }
                            $data['pages'] = 'add_charity';
                           /* ---------------------------------------------------- */
                            $this->load->view('layout', $data);
                }
                else
                {
                                      
                    $insert_data['charity_name']=$this->input->post('charity_name');
                    $insert_data['status']=$this->input->post('status');
                 
                    if(!empty($prv_c_id)){
                    $insert_data['update_date']=date("Y-m-d H:i");
                    $status = $this->Db_model->update_records("bp_charity",$insert_data,array("id"=>$prv_c_id));
                    
                    
                    $this->session->set_flashdata("success_msg","charity has been updated successfully.");
               
                    }else{
                    $insert_data['create_date']=date("Y-m-d H:i");
                    $status = $this->Db_model->insert_records("bp_charity",$insert_data);
                    if($status > 0){
                    $this->session->set_flashdata("success_msg","charity has been add successfully.");
                       
                    }else{
                        $this->session->set_flashdata("error_msg","charity not added successfully.");
                   
                    }
                    
                   }
                    
                    
                    
                  
                    redirect(base_url("charity"));
                }
        
        
            
     
        
    }
    
    
    public function add_subcharity() {
                $this->form_validation->set_rules('charity_name', 'charity name', 'required');
                $this->form_validation->set_rules('s_charity_name', 'sub charity name', 'required');
                $this->form_validation->set_rules('donation', 'donation amount', 'required');
                $this->form_validation->set_rules('status', 'status', 'required');
                
                $prv_c_id = $this->uri->segment(3);
                
                if ($this->form_validation->run() == FALSE)
                {
                            $data['charities'] = $this->Db_model->get_records_by_id("bp_charity",false,array("parent_id"=>"0","status<>"=>"0"),"*","","");
                            if(!empty($prv_c_id)){
                                $data['prv_data'] = $this->Charity_model->get_edit_charity_data($prv_c_id);
                            }
                            
                            
                            $data['pages'] = 'add_sub_charity';
                           /* ---------------------------------------------------- */
                            $this->load->view('layout', $data);
                }
                else
                {
                    $insert_data['parent_id']=$this->input->post('charity_name');
                    $insert_data['charity_name']=$this->input->post('s_charity_name');
                    $insert_data['donation']=$this->input->post('donation');
                    
                    $insert_data['status']=$this->input->post('status');
                    
                    if(!empty($prv_c_id)){
                    $insert_data['update_date']=date("Y-m-d H:i");    
                        // $status = $this->Db_model->update_records("bp_sub_charity",$insert_data,array("id"=>$prv_c_id));
                         $status = $this->Db_model->update_records("bp_charity",$insert_data,array("id"=>$prv_c_id));
                         $this->session->set_flashdata("success_msg","sub charity has been add successfully.");
                   
                    }else{
                    $insert_data['create_date']=date("Y-m-d H:i");
                    
                    $status = $this->Db_model->insert_records("bp_charity",$insert_data);
                    //$status = $this->Db_model->insert_records("bp_sub_charity",$insert_data);
                   
                    if($status > 0){
                    $this->session->set_flashdata("success_msg","sub charity has been add successfully.");
                       
                    }else{
                        $this->session->set_flashdata("error_msg","sub charity not added successfully.");
                   
                    }
                           
                   
                    }
                    
                    
                    
                    
                   
                    redirect(base_url("charity/view_subcharity"));
                }
        
        
            
     
        
    }
    
    

    public function manage_user_charity(){

          $sdata = $this->session->userdata("login_data");
        

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $fix_uri_segment = 3;     // fixurisegment = $page not 0
          $sessiondata = $this->session->userdata('session_data');
          $per_page = !empty($sessiondata['pagerecords']) ?$sessiondata['pagerecords']: 10;
        $pagination_url = site_url('charity/manage_user_charity');
        $page_data = $this->Charity_model->get_user_charities($per_page, $page, NULL);
        

        $count_total_rows = $this->Charity_model->count_user_charities();

        $data = $this->Db_model->pagination_data($pagination_url, 'products', $count_total_rows, $per_page, $fix_uri_segment, $page, $page_data);

         
       
      
        $data['pages'] = 'manage_user_charity';
       
        /* ---------------------------------------------------- */
        $this->load->view('layout', $data);
        
    
    }
  
   

    public function edit_charity_amount(){
                $this->form_validation->set_rules('donate_amount', 'donation amount', 'required');
                              
                 $prv_c_id =  $this->uri->segment(3);
                 

                if ($this->form_validation->run() == FALSE)
                {  
                            if(!empty($prv_c_id)){
                              //  $data['prv_charity'] = $this->Db_model->get_records_by_id("bp_user_charity",true,array("id"=>$prv_c_id),"*","","");
                                $data['prv_charity'] = $this->Db_model->get_records_by_id("bp_financial_profile",true,array("ID"=>$prv_c_id),"*","","");
                           
                                }


                            $data['pages'] = 'edit_user_charity';
                           /* ---------------------------------------------------- */
                            $this->load->view('layout', $data);
                }
                else
                {
                                      
                    $insert_data['donate-amount']=$this->input->post('donate_amount');
                                  
                                                     
                    if(!empty($prv_c_id)){
//                    $insert_data['update_date']=date("Y-m-d H:i");
                    $status = $this->Db_model->update_records("bp_financial_profile",$insert_data,array("ID"=>$prv_c_id));
                    
                    if($status > 0){
                    $this->session->set_flashdata("success_msg","Donation amount has been updated successfully.");
                    }else{
                     $this->session->set_flashdata("success_msg","Donation amount not updated successfully.");
                    }
                    

                    }
                    
                    redirect(base_url("charity/manage_user_charity"));
                }
        
              } 

}
