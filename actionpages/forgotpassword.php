<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if(isset($_POST['login']))
{
        $cond=' emailId="'.$_POST['em'].'"';
        $d=$obj->selectq('bp_users', $data = '*', $cond);
        //$obj->arra($d);  
        $p=rand(1000,9999);

        $obj->inserup('bp_users',array('pass'=>md5($p)),$cond);
        $Subject = 'Password Change';
         
         $seekerBody = file_get_contents('emailtemplate/passwordchange.html');
         /*---------------------Seeker End-----------------*/
         $seekerBody=str_replace('%name%',$d[0]->fname , $seekerBody);
         $seekerBody=str_replace('%site%', 'buffpod', $seekerBody);
         $seekerBody=str_replace('%email%', $d[0]->emailId, $seekerBody);
         $seekerBody=str_replace('%pass%', $p, $seekerBody);
         
         $seekerBody=str_replace('%logo%', site_url('images/logo.png'), $seekerBody);
         $seekerBody=str_replace('%url%', site_url(), $seekerBody);
         
         $obj->mailing($d[0]->emailId,MAILADMIN,$Subject,$seekerBody);
         $obj->mailing(MAILADMIN,MAILADMIN,$Subject,$seekerBody);
         //$obj->arra($_POST);die;
         $_SESSION['msg']='Password is changed Please Check In your mailbox'; 
        

        // redirect(site_url());
           redirect(site_url_wp());
}