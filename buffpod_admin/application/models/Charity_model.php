<?php

class Charity_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->library('pagination');
    }

    function get_charities($limit, $start, $st = NULL) {
        $query_string="";
                
        if ($st == "NIL")
            $st = "";

       $query_string = "select * from bp_charity where parent_id=0 ";
        
        
        if ($st != NULL) {
            $query_string .=" ";
        }
        
        $query_string .=" order by id desc limit $start , $limit ";
        $query = $this->db->query($query_string);
       //echo $this->db->last_query();
        $results = $query->result_array();
        return $results;
    }

    function get_users_count($st = NULL) {   // this count for searching result 
      
    }

    function count_charities() {   // this count for all users 
        $sql = "select id from bp_charity where parent_id=0 ";
         
        $query = $this->db->query($sql);
        return $query->num_rows();
        // return $query;
    }

    function get_sub_charities($limit, $start, $st = NULL) {
        $query_string="";
                
        if ($st == "NIL")
            $st = "";

      // $query_string = "select b_s_c.*,b_c.charity_name from bp_sub_charity b_s_c join bp_charity b_c on b_s_c.charity_id=b_c.id ";
       $query_string = "select a.id,a.donation,a.charity_name as sub_charity_name,b.charity_name as charity_name, a.status from bp_charity a join bp_charity b on a.parent_id=b.id and a.parent_id <> 0 ";
        
        
        if ($st != NULL) {
            $query_string .=" ";
        }
        
        $query_string .=" order by a.id desc limit $start , $limit ";
        $query = $this->db->query($query_string);
       //echo $this->db->last_query();
        $results = $query->result_array();
        return $results;
    }

    function count_sub_charities() {   // this count for all users 
        $sql ="select a.id from bp_charity a join bp_charity b on a.parent_id=b.id and a.parent_id <> 0 ";
         
        $query = $this->db->query($sql);
        return $query->num_rows();
        // return $query;
    }
    
    function get_edit_charity_data($prv_ci_id){
        $sql ="select a.id,a.donation , a.parent_id, a.charity_name as sub_charity_name,b.charity_name as charity_name, a.status from bp_charity a join bp_charity b on a.parent_id=b.id and a.parent_id <> 0 and a.status<>0 and  a.id=".$prv_ci_id." ";
         
        $query = $this->db->query($sql);
        $results = $query->result_array();
      
        return $results[0];
    }


// ==================================================  

  function get_user_charities($limit, $start, $st = NULL) {
        $query_string="";
                
        if ($st == "NIL")
            $st = "";

       $query_string = "SELECT  bp_u.fname,  bp_u.lname , bp_f_p.*, bp_c.charity_name AS charity_name, bp_s_c.charity_name AS sub_charity_name
FROM  `bp_financial_profile` bp_f_p
JOIN bp_charity bp_c ON bp_f_p.parent_cherity_name = bp_c.id
JOIN bp_charity bp_s_c ON bp_f_p.donate_cherity_name = bp_s_c.id
JOIN bp_users bp_u ON bp_f_p.ID = bp_u.ID";
        
        
        if ($st != NULL) {
            $query_string .=" ";
        }
        
        $query_string .=" order by bp_f_p.ID desc limit $start , $limit ";
        $query = $this->db->query($query_string);
       //echo $this->db->last_query();
        $results = $query->result_array();
        return $results;
    }
//
//  function get_user_charities($limit, $start, $st = NULL) {
//        $query_string="";
//                
//        if ($st == "NIL")
//            $st = "";
//
//       $query_string = "select buc.id,buc.charity_u_id,bu.fname,bu.lname,  buc.charity_id,buc.sub_charity_id,buc.donation_amount, bc.charity_name as charity_name, bsubcharity.charity_name as sub_charity_name  from bp_user_charity buc 
//join bp_charity bc
//on buc.charity_id=bc.id 
//join bp_charity bsubcharity 
//on buc.sub_charity_id=bsubcharity.id 
//join bp_users bu 
//on buc.charity_u_id=bu.ID ";
//        
//        
//        if ($st != NULL) {
//            $query_string .=" ";
//        }
//        
//        $query_string .=" order by buc.id desc limit $start , $limit ";
//        $query = $this->db->query($query_string);
//       //echo $this->db->last_query();
//        $results = $query->result_array();
//        return $results;
//    }

   
    function count_user_charities() {   // this count for all users 
        $sql = "SELECT bp_f_p.ID
FROM  `bp_financial_profile` bp_f_p
JOIN bp_charity bp_c ON bp_f_p.parent_cherity_name = bp_c.id
JOIN bp_charity bp_s_c ON bp_f_p.donate_cherity_name = bp_s_c.id
JOIN bp_users bp_u ON bp_f_p.ID = bp_u.ID ";
         
        $query = $this->db->query($sql);
        return $query->num_rows();
        // return $query;
    }
//   
//    function count_user_charities() {   // this count for all users 
//        $sql = "select buc.id  from bp_user_charity buc 
//join bp_charity bc
//on buc.charity_id=bc.id 
//join bp_charity bsubcharity 
//on buc.sub_charity_id=bsubcharity.id 
//join bp_users bu 
//on buc.charity_u_id=bu.ID ";
//         
//        $query = $this->db->query($sql);
//        return $query->num_rows();
//        // return $query;
//    }




}
