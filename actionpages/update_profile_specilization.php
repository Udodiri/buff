<?php
//print_R($_POST); #die;

if(isset($_POST['submit']) && $_POST['submit']=='save'){
    unset($_POST['action']);
    $cond=' user_id='.$_POST['ID'];
    delete('bp_specilization',$cond,$con);
    $_SESSION['user']->specilization=$_POST['specilization'];
    
    foreach ($_POST['specilization'] as $k=>$v)
    {
        
        $data['user_id']=$_POST['ID'];
        $data['specilization']=$v;
        
        inserup('bp_specilization',$data,0,$con); 
    }
    
    $_SESSION['msg']='Your Specialization has been Updated.'; 
                     
    redirect(site_url('?page=profile'));
    
}




