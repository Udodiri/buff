<?php
//print_R($_POST);
if(isset($_POST['save']) && $_POST['save']=='Submit')
{
    unset($_POST['action']);
    
    $_SESSION['user']->fname=$data['fname']=$_POST['name'];
    $_SESSION['user']->lname=$data['lname']='';
    $_SESSION['user']->city=$data['city']=$_POST['city'];
    $_SESSION['user']->location=$data['location']=$_POST['location'];
    $_SESSION['user']->bio=$data['bio']=$_POST['bio'];
    if(isset($_POST['password']) && strlen(trim($_POST['password']))>1)
    {
        $data['pass']=md5($_POST['password']);
        $Subject = 'Password Change';
         
         $seekerBody = file_get_contents('emailtemplate/passwordchange.html');
         
         
         
         /*---------------------Seeker End-----------------*/
         $seekerBody=str_replace('%name%',$obj->uname($_POST['ID']) , $seekerBody);

         
         $seekerBody=str_replace('%site%', 'buffpod', $seekerBody);
         $seekerBody=str_replace('%email%', $_SESSION['user']->emailId, $seekerBody);
         $seekerBody=str_replace('%pass%', $_POST['password'], $seekerBody);
         
         $seekerBody=str_replace('%logo%', site_url('images/logo.png'), $seekerBody);
         $seekerBody=str_replace('%url%', site_url(), $seekerBody);
          $obj->mailing($_SESSION['user']->emailId,MAILADMIN,$Subject,$seekerBody);
        
        
        
    }
        $cond=" ID=".$_POST['ID'];
        
        inserup('bp_users',$data,$cond,$con); 
        $_SESSION['msg']='Your profile has been successfully updated'; 
        redirect(site_url('?page=profile'));
    
    
   
}
