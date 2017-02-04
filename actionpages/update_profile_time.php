<?php

if(isset($_POST['save']) && $_POST['save']=='Submit'){
    unset($_POST['action']);
    $cond=' ID='.$_POST['ID'];
    delete('bp_users_days',$cond,$con);
    $_SESSION['user']->days=$_POST['days'];
    $_SESSION['user']->mode=$_POST['mode'];
    #echo '<pre>';print_R($_SESSION['user']);
    //die;
    foreach ($_POST['days'] as $k=>$v)
    {
        $data['ID']=$_POST['ID'];
        $data['days']=$k;
         $data['time']= base64_encode(json_encode($v['to']));
        //echo base64_decode($data['time']); 
        $data['mode']=$_POST['mode'];
        #print_R($data);
        //echo '<hr>';
       $obj->inserup('bp_users_days',$data,0,$con); 
    }
    
     $_SESSION['msg']='Your Availability has been Updated.';
                       
    redirect(site_url('?page=profile'));
    
}


