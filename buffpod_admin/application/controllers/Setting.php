<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {

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
        $this->load->model("Payment_model");
        $session_data = $this->session->userdata('login_data');
        if (empty($session_data)) {
            redirect("login");
        }
    }

    public function index() {
        #print_R($_POST);

        $this->load->library('form_validation');

        $this->form_validation->set_rules('strip_live_public', 'Strip live public key', 'required');
        $this->form_validation->set_rules('strip_live_secrit', 'Strip live secrit key', 'required');
        $this->form_validation->set_rules('strip_test_public', 'Strip Test Public Key', 'required');
        $this->form_validation->set_rules('strip_test_secrit', 'Strip Test secrit Key', 'required');
        $this->form_validation->set_rules('api', 'Tokbox Apikey', 'required');
        $this->form_validation->set_rules('secrit', 'Tokbox Secritkey', 'required');
        $this->form_validation->set_rules('site_live', 'Site live Status', 'required');

        if ($this->form_validation->run() == True && $this->input->post('save') != null) {
            $this->Db_model->meta_update('site_live', trim($this->input->post('site_live')));
            $this->Db_model->meta_update('strip_live_public', trim($this->input->post('strip_live_public')));
            $this->Db_model->meta_update('strip_live_secrit', trim($this->input->post('strip_live_secrit')));
            $this->Db_model->meta_update('strip_test_public', trim($this->input->post('strip_test_public')));
            $this->Db_model->meta_update('strip_test_secrit', trim($this->input->post('strip_test_secrit')));
            $this->Db_model->meta_update('tokbox_apikey', trim($this->input->post('api')));
            $this->Db_model->meta_update('tokbox_secritkey', trim($this->input->post('secrit')));
            $this->Db_model->meta_update('strip_payment', trim($this->input->post('payment')));
        }
     
        $data['api'] = $this->Db_model->get_meta('tokbox_apikey');
        $data['secrit'] = $this->Db_model->get_meta('tokbox_secritkey');
        $data['payment'] = $this->Db_model->get_meta('strip_payment');
        $data['strip_live_api'] = $this->Db_model->get_meta('strip_live_public');
        $data['strip_live_secrit'] = $this->Db_model->get_meta('strip_live_secrit');
        $data['strip_test_api'] = $this->Db_model->get_meta('strip_test_public');
        $data['strip_test_secrit'] = $this->Db_model->get_meta('strip_test_secrit');
        $data['site_live'] = $this->Db_model->get_meta('site_live');
        $data['pages'] = 'settings';
        $this->load->view('layout', $data);
    }

}
