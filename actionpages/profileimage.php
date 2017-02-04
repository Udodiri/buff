<?php

if(isset($_POST['Save_Your_Image']) && $_POST['Save_Your_Image']=='Submit')
{
    $path='images/profile/';
    $ext = pathinfo($_FILES['profilepic']['name'], PATHINFO_EXTENSION);
    $_SESSION['user']->images=$filename=substr(md5(rand().rand().rand()),0,-10).'.'.$ext;
     echo $destination=$path.$filename;
    
    if(move_uploaded_file($_FILES['profilepic']['tmp_name'], $destination))
    {
        $cond=" ID=".$_POST['ID'];
        $data['images']=$filename;
        inserup('bp_users',$data,$cond,$con); 
        $_SESSION['msg']='Profile Image update';
        redirect(site_url('?page=profile'));
    }
    else
    {
        $_SESSION['msg']='Some Error in Image';
        redirect(site_url('?page=profile'));
    }
}

