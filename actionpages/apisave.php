<?php


//print_R($_POST);
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$m=$_POST['meeing_ID'];
$_POST['url']=site_url('?page=seminar&meeing_id='.$m);
unset($_POST['submit']);
$obj->inserup('video_meeting',$_POST);
redirect(site_url('?page=mybookings_consultant'));
