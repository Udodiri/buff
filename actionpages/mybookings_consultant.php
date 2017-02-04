<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$invoice=$_REQUEST['invoice'];
$cond=' invoice_id="'.$invoice.'"';
$cond1=' invoiceno="'.$invoice.'"';
$bookdata=$obj->selectq('bp_booking','*',$cond);
$bookdata1=$obj->selectq('bp_order','*',$cond1);


$bookdata1[0]->bookdatas=$bookdata[0];
//print_R($bookdata1[0]);


$cond2=' ID="'.$bookdata1[0]->U_ID.'"';
$User=$obj->selectq('bp_users','emailId',$cond2);
$cond3=' ID="'.$bookdata1[0]->consultant_ID.'"';
$User1=$obj->selectq('bp_users','emailId',$cond3);

$stat='';
$confirm='';
switch($_REQUEST['aprove'])
{
    case '1':
        $stat='Aproved';
        $confirm='Appointment has been confirmed';
        break;
    case '4':
        $stat='Un-Aproved';
        $confirm='Appointment has been declined';
        break;
}
#die;
         $Subject = $confirm;

         $seekerBody = file_get_contents('emailtemplate/seekeraccept.html');
        /*---------------------Seeker End-----------------*/
         $seekerBody=str_replace('%consname%',$obj->uname($bookdata1[0]->consultant_ID) , $seekerBody);
         $seekerBody=str_replace('%seekername%', $obj->uname($bookdata1[0]->U_ID), $seekerBody);
         
         $seekerBody=str_replace('%site%', 'buffpod', $seekerBody);
         $seekerBody=str_replace('%status%',$stat, $seekerBody);
         $seekerBody=str_replace('%date%', $bookdata1[0]->bookdatas->booking_date, $seekerBody);
         $seekerBody=str_replace('%time%', $obj->timeselect($bookdata1[0]->bookdatas->booking_time,true), $seekerBody);
         $seekerBody=str_replace('%logo%', site_url('images/logo.png'), $seekerBody);
         $seekerBody=str_replace('%url%', site_url(), $seekerBody);
        /*---------------------Seeker End-----------------*/
         
        $obj->mailing($User[0]->emailId,MAILADMIN,$Subject,$seekerBody);
        $Subject='New Appointment Status:'.$confirm;
        $obj->mailing($User1[0]->emailId,MAILADMIN,$Subject,$seekerBody); 
        $Subject='New Appointment Status:'.$confirm;
        $obj->mailing(MAILADMIN,MAILADMIN,$Subject,$seekerBody); 

$data=array('booking_status'=>$_REQUEST['aprove']);
$obj->inserup('bp_booking',$data,$cond);
redirect($obj->site_url('?page=mybookings_consultant'));

