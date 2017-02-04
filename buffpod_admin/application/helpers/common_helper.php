<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

   function timeselect($id = 0, $flag = false) {
        $time = array(
            '8 AM – 9 AM',
            '9 AM – 10 AM',
            '10 AM – 11 AM',
            '11 AM – 12 noon',
            '12 noon- 1 PM',
            '1 PM- 2 PM',
            '2 PM- 3 PM',
            '3 PM- 4 PM',
            '4 PM- 5 PM',
            '5 PM- 6 PM',
            '6 PM- 7 PM',
            '7 PM- 8 PM',
            '8 PM- 9 PM',
            '9 PM- 10 PM',
            '10 PM- 11 PM',
            '11 PM- 12 AM'
        );
        if ($flag) {
            return $time[$id];
        } else {
            return $time;
        }
    }
// if (!function_exists('check_login')){
//     function check_login(){
//          $CI = get_instance();
//     // You may need to load the model if it hasn't been pre-loaded
//          $session_data = isset($CI->session->userdata('login_data'))?$CI->session->userdata('login_data'):"";
//         if(!empty($session_data)){
//         	return 1;
//         }else{
//         	return 0;
//             //redirect("admin/login");
//         }
//     }
// }
