<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
        
    }

    public function index() {
        //check_login();

        $session_data = $this->session->userdata("login_data");
        if(!empty($session_data)){
        	redirect('home');
        }else{
			redirect('login');
        }
    }
    
    
    public function register() {
		
		// create the data object
		$data = new stdClass();
		
		// load form helper and validation library
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		// set validation rules
		$this->form_validation->set_rules('email', 'Email', 'trim|required|alpha_numeric|min_length[4]|is_unique[users.email]', array('is_unique' => 'This email already exists. Please choose another one.'));
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[bp_admin_users.emailId]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
		$this->form_validation->set_rules('password_confirm', 'Confirm Password', 'trim|required|min_length[6]|matches[password]');
		
		if ($this->form_validation->run() === false) {
			
			// validation not ok, send validation errors to the view
			$this->load->view('header');
			$this->load->view('user/register/register', $data);
			$this->load->view('footer');
			
		} else {
			
			// set variables from the form
			$email = $this->input->post('email');
			$email    = $this->input->post('email');
			$password = $this->input->post('password');
			
			if ($this->user_model->create_user($email, $email, $password)) {
				
				// user creation ok
				$this->load->view('header');
				$this->load->view('user/register/register_success', $data);
				$this->load->view('footer');
				
			} else {
				
				// user creation failed, this should never happen
				$data->error = 'There was a problem creating your new account. Please try again.';
				
				// send error to the view
				$this->load->view('header');
				$this->load->view('user/register/register', $data);
				$this->load->view('footer');
				
			}
			
		}
		
	}
		
	/**
	 * login function.
	 * 
	 * @access public
	 * @return void
	 */
	public function login() {
		
//		// create the data object
//		$data = new stdClass();
		
		// load form helper and validation library
				
		// set validation rules
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		
		if ($this->form_validation->run() == false) {
			
			// validation not ok, send validation errors to the view
			  $this->load->view("login");
			
		} else {
			
			// set variables from the form
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$hash_pass = md5($password);
            $userdata = $this->Db_model->get_records_by_id("bp_users",true,array("emailId"=>$email,"pass"=>$hash_pass),"*","","");
			
			if (!empty($userdata)) {
				$this->session->set_userdata("login_data",$userdata);				
				// user login ok
				redirect(base_url("home"));
				
			} else {
				
				// login failed
				$this->session->set_flashdata("login_error","wrong email id or password.");
				redirect("admin/login");
				
			}
			
		}
		
	}
	
	/**
	 * logout function.
	 * 
	 * @access public
	 * @return void
	 */
	public function logout() {
		$session_data = $this->session->userdata("login_data");
	 if (!empty($session_data)) {
     $this->session->unset_userdata('login_data');
     $this->session->sess_destroy();
     redirect(base_url("admin/login"));                                            	
			
			
		} 
		
	}
    
    
    
    

}
