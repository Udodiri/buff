<?php

if(isset($_POST['save']) && $_POST['save']=='Submit')
{
    //$obj->arra($_POST);
    $cond=' ID='.$_POST['ID'];
    delete('bp_financial_profile',$cond,$con);
    unset($_POST['action']);
    $data['ID']=$_POST['ID'];
    $_SESSION['user']->hourlyrate=$data['hourlyrate']=$_POST['hourlyrate'];
    $_SESSION['user']->donateamount=$_POST['donate-amount'];
    $_SESSION['user']->parent_cherity_name=$_POST['parent_cherity'];
    $_SESSION['user']->donate_cherity_name=$_POST['donet_cherity'];
    $_SESSION['user']->donate_status = $_POST['cherity'];



    $data['carddetails']=  base64_encode($_POST['carddetails']);
    $data['donate-amount']=  trim($_POST['donate-amount']);
    $data['parent_cherity_name']=$_POST['parent_cherity'];
    $data['donate_cherity_name']=$_POST['donet_cherity'];
    $data['donate_status'] = $_POST['cherity'];
    
        $_SESSION['user']->carddetails=  base64_decode($data['carddetails']);
        $cond=" ID=".$_POST['ID'];
        inserup('bp_financial_profile',$data,0,$con);  // insert data 
        $_SESSION['msg']='Your financial information has been successfully updated';
        //$obj->arra($_SESSION['user']);
        #die;
        redirect(site_url('?page=profile'));
    
    
   
}