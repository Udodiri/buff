<?php

class Db_model extends CI_Model {

    function __construct() {

        parent::__construct();
        $this->load->library('pagination');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->database();
    }

    /* ----------------------------------Basic DataBase Function --------------------------------------- */

    function get_meta($key) {
        $condition['meta_key'] = $key;
        $q = $this->db->get_where('bp_setting', $condition);
        $sql = $this->db->last_query();
        $que = $q->num_rows($q);
        if ($que > 0) {
            $d=$q->result();
            return $d[0]->value;
            
        }
    }
    function meta_update($key,$val){
        $condition['meta_key']=$key;
        
        $this->delete_records('bp_setting', $condition);
        $condition['value'] = $val;
        $q = $this->insert_rec_without_autoincrment('bp_setting', $condition);
        
    }
    
    

    function get_where_data($table, $condition) {
        #print_R($condition); echo $table; 
        $q = $this->db->get_where($table, $condition);
        $sql = $this->db->last_query();
        $que = $q->num_rows($q);
        if ($que > 0) {
            return $q->result();
        }
    }

    public function record_count($table) {
        return $this->db->count_all($table);
    }

    public function get_records_by_id($table, $single, $data_condition, $select, $order_by_field, $order_by_value) {
        if (!empty($data_condition)) {
            $this->db->where($data_condition);
        }if (!empty($select)) {
            $this->db->select($select);
        }
        if (!empty($order_by_field) && !empty($order_by_value)) {
            $this->db->order_by($order_by_field, $order_by_value);
        }
        $query = $this->db->get($table);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            if ($single) {
                return $result[0];
            } else {
                return $result;
            }
        } else {
            return 0;
        }
    }

    public function update_records($table, $data, $where_cond) {
        $this->db->where($where_cond);
        $this->db->update($table, $data);
        return $this->db->affected_rows();
    }

    // ------------------- for insert record in any table ----------


    function insert_records($table, $data) {
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }

// if table have no incrment field 
    function insert_rec_without_autoincrment($table, $data) {
        return $this->db->insert($table, $data);
    }

    // -------------------- for delete the record any table -----



    function delete_records($table, $condition) {
        $this->db->delete($table, $condition);
        return $this->db->affected_rows();
    }

    /// ------------------------- for upload image -----------------







    public function do_upload($upload_file, $upload_path) {
        //  upload_path like this './images/admin_portfolio_img/';
        $config['upload_path'] = $upload_path;
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 1024;
        $config['max_width'] = 1024;
        $config['max_height'] = 768;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload($upload_file)) {
            $error = array('error' => $this->upload->display_errors());
            return $error;
        } else {
            $data = array('upload_data' => $this->upload->data());
            return $data;
        }
    }

    // -------------- for pagination -->







    public function pagination_data($pagination_url, $table, $count_leads, $per_page, $fix_uri_segment, $uri_segment, $pagination_data) {
//pagination settings
        $config['base_url'] = $pagination_url;
        $config['total_rows'] = $count_leads;
        $config['per_page'] = $per_page;
        $config["uri_segment"] = $fix_uri_segment;
        $choice = $config["total_rows"] / $config["per_page"];
        //$config["num_links"] = floor($choice);
        $config["num_links"] = 10;
        // integrate bootstrap pagination
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '«';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '»';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $this->pagination->initialize($config);
        $data['page'] = $uri_segment;
        // get books list
        $data['all_records'] = $pagination_data;
        $data['pagination'] = $this->pagination->create_links();

        return $data;
    }

    // for search record in pagination



    public function search_pagination_data($pagination_url, $table, $per_page, $fix_uri_segment, $uri_segment, $total_with_search_key, $pagination_data) {



        $config = array();



        $config['base_url'] = $pagination_url;



        $config['total_rows'] = $total_with_search_key;



        $config['per_page'] = $per_page;



        $config["uri_segment"] = $fix_uri_segment;



        $choice = $config["total_rows"] / $config["per_page"];



        $config["num_links"] = floor($choice);
// integrate bootstrap pagination
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';



        $config['first_tag_close'] = '</li>';



        $config['prev_link'] = 'Prev';



        $config['prev_tag_open'] = '<li class="prev">';



        $config['prev_tag_close'] = '</li>';



        $config['next_link'] = 'Next';



        $config['next_tag_open'] = '<li>';



        $config['next_tag_close'] = '</li>';



        $config['last_tag_open'] = '<li>';



        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $this->pagination->initialize($config);
        $data['page'] = $uri_segment;
// get books list
        $data['all_records'] = $pagination_data;
        $data['pagination'] = $this->pagination->create_links();
//load view

        return $data;
    }

}
