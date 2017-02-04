<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
        $this->load->model("user_model");
        $session_data = $this->session->userdata("login_data");
        if(!empty($session_data) && $session_data['utype']==1){}else{redirect("login");}
    }

    public function index() {
        
         $data['count_consultant'] = $this->user_model->countrecords("bp_users","utype","2"); // 2 consultant
         $consultant_cnt = $data['count_consultant'];
         $data['count_seekar'] = $this->user_model->countrecords("bp_users","utype","3"); // 2 consultant
         $seekar_cnt = $data['count_seekar'];
         $data['count_charityuser'] = $this->user_model->countrecords("bp_users","utype","4"); // 2 consultant
      
         $graph_data = array();
         if(!empty($consultant_cnt) || !empty($seekar_cnt)){
            $j=0;
            for($i=2016;$i<2022;$i++){
                 $consultant_count = $this->user_model->countgraphrecords("bp_users","utype","2",$i); // 2 consultant
                 $seeker_count = $this->user_model->countgraphrecords("bp_users","utype","3",$i); // 3 seeker
                 
                 // echo "consultant_cnt".$consultant_count ;
                 // echo "<br> seekar".$seeker_count ;


               //  $graph_data[$j] = array("year"=>$i,"c_".$j=>$consultant_count, "s_".$j=>$seeker_count);
                 $graph_data[$j] = array("y"=>$i,"a"=>$consultant_count, "b"=>$seeker_count);

            
            $j++;
            }

             // $graph_data=array();
              $json_data = "";

             $data['graph_data'] = json_encode($graph_data,true);


             // for
             
             // foreach ($graph_data as $k => $v) {
             //     # code...
             //    $json_data .=  "{ y:".$v['year'].", a: ".$v['c_'.$k].",  b: ".$v['s_'.$k]." }," ;
             // }

                // $json = rtrim($json_data,",");
                // $chart_data = "[".$json."]";
                // //echo $chart_data;

                // $data['graph_data'] = $chart_data;
                

 

         }

        $data['pages'] = 'home';
        $this->load->view('layout', $data);
    }

}
