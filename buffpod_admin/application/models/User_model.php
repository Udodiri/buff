<?php

class User_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->library('pagination');
    }

    function get_users($limit, $start, $st = NULL) {
          $sdata = $this->session->userdata("login_data");
          $utype = !empty($sdata['setusertype'])?$sdata['setusertype']:"";
         
          
          $query_string="";
        
        
        if ($st == "NIL")
            $st = "";

       $query_string = "select * from bp_users where status<>0 and utype<>1";
      
        
        if(!empty($utype)){
            $query_string = $query_string." and utype=".$utype;
        }
      
        
        if ($st != NULL) {
            $query_string .=" ";
        }
        
        $query_string .=" order by ID desc limit $start , $limit ";
        $query = $this->db->query($query_string);
       //echo $this->db->last_query();
        $results = $query->result_array();
        return $results;
    }

    function get_users_count($st = NULL) {   // this count for searching result 
      
    }

    function count_users() {   // this count for all users 
        $sdata = $this->session->userdata("login_data");
        $utype = !empty($sdata['setusertype'])?$sdata['setusertype']:"";
        
       
      
      
        
        $sql = "select ID from bp_users where status<>0 and utype<>1";
         if(!empty($utype)){
            $sql = $sql." and utype=".$utype;
        }
        
        $query = $this->db->query($sql);
        return $query->num_rows();
        // return $query;
    }


    public function countrecords($table,$field,$value){
        $sql = "select count(".$field.") as count from ".$table." where ".$field." = ".$value." " ;
        $query = $this->db->query($sql);
        $count = $query->result_array();
        return $count[0]['count'];

    }

    public function countgraphrecords($table,$field,$value,$year){
        $sql = "select count(".$field.") as count from ".$table." where ".$field." = ".$value."  and Year(usercreateDate)=".$year."  " ;
        $query = $this->db->query($sql);
        $count = $query->result_array();

       // echo $this->db->last_query();

        return $count[0]['count'];

    }

    public function countusers($utype , $year){
        $sql = "SELECT count(ID) as countuser FROM `bp_users` WHERE `utype` = ".$utype." and YEAR(usercreateDate) =".$year;
        $query = $this->db->query($sql);
        return $query->num_rows();       

    }


}
