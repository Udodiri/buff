<?php

class Payment_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->library('pagination');
    }

    function get_payment_data($limit, $start, $st = NULL) {
        $query_string="";
                
        if ($st == "NIL")
            $st = "";

       $query_string = "SELECT bp_o . * , bp_sekar.fname AS seekar_name, bp_consultant.fname AS consultant_name
FROM  `bp_order` bp_o
JOIN bp_users bp_consultant ON bp_o.consultant_ID = bp_consultant.ID
JOIN bp_users bp_sekar ON bp_o.U_ID = bp_sekar.ID";
        
        
        if ($st != NULL) {
            $query_string .=" ";
        }
        
        $query_string .=" order by bp_o.ID desc limit $start , $limit ";
        $query = $this->db->query($query_string);
       //echo $this->db->last_query();
        $results = $query->result_array();
        return $results;
    }

    function get_users_count($st = NULL) {   // this count for searching result 
      
    }

    function count_payment_data() {   // this count for all users 
        $sql = "SELECT bp_o . ID FROM  `bp_order` bp_o
JOIN bp_users bp_consultant ON bp_o.consultant_ID = bp_consultant.ID
JOIN bp_users bp_sekar ON bp_o.U_ID = bp_sekar.ID";
         
        $query = $this->db->query($sql);
        return $query->num_rows();
        // return $query;
    }

    
}
