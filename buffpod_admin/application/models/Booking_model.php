<?php

class Booking_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->library('pagination');
    }

    function get_booking_data($limit, $start, $st = NULL) {

          $sdata = $this->session->userdata("login_data");
          $bktype = !empty($sdata['setbookingtype'])?$sdata['setbookingtype']:"";

        $query_string="";
                
        if ($st == "NIL")
            $st = "";

       $query_string = "SELECT bp_b . * ,bp_o.payment_status,  CONCAT(bp_sekar.fname, ' ', bp_sekar.lname) AS seekar_name, CONCAT(bp_consultant.fname, ' ', bp_consultant.lname)  AS consultant_name
FROM  `bp_booking` bp_b
JOIN bp_order bp_o ON bp_b.invoice_id = bp_o.invoiceno
JOIN bp_users bp_consultant ON bp_o.consultant_ID = bp_consultant.ID
JOIN bp_users bp_sekar ON bp_o.U_ID = bp_sekar.ID ";
        
        
        if(!empty($bktype)){
            $query_string = $query_string." where bp_b.booking_status=".$bktype;
        }

        if ($st != NULL) {
            $query_string .=" ";
        }
        
        $query_string .=" order by bp_o.ID desc limit $start , $limit ";
        $query = $this->db->query($query_string);
       // echo $this->db->last_query(); 
       // die;
        $results = $query->result_array();
        return $results;
    }

    function get_users_count($st = NULL) {   // this count for searching result 
      
    }

    function count_booking_data() {   // this count for all users 
   $sdata = $this->session->userdata("login_data");
          $bktype = !empty($sdata['setbookingtype'])?$sdata['setbookingtype']:"";

        $sql = "SELECT bp_b . * , bp_sekar.fname AS seekar_name, bp_consultant.fname AS consultant_name
FROM  `bp_booking` bp_b
JOIN bp_order bp_o ON bp_b.invoice_id = bp_o.invoiceno
JOIN bp_users bp_consultant ON bp_o.consultant_ID = bp_consultant.ID
JOIN bp_users bp_sekar ON bp_o.U_ID = bp_sekar.ID";

     if(!empty($bktype)){
            $sql = $sql." where bp_b.booking_status=".$bktype;
        }
        
         
        $query = $this->db->query($sql);
        return $query->num_rows();
        // return $query;
    }

    
}
