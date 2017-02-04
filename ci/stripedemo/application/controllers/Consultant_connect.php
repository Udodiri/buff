<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Consultant_connect extends CI_Controller {
 
	public function __construct() {
 
		parent::__construct();
 
		}
 
          public function index()
         {	
         		$data['pay_url'] = "https://connect.stripe.com/oauth/authorize?response_type=code&client_id=ca_9MSmI571aMlM4OghKXM8xUyJ4mSFuFKK&scope=read_write";	
             $this->load->view('consultant',$data);
          }
 
 
}