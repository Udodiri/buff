
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BuffPod</title>
<link rel="shortcut icon" href="images/fav.png" />
<link rel="stylesheet" href="css/layout.css" />

<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
<script src="http://malsup.github.com/jquery.form.js"></script> 
<!-- for banner slider -->
            <script src="<?php echo site_url('lib/own_lib/js/jquery.min.js'); ?>"></script>
            <link href="css/js-image-slider.css" rel="stylesheet" type="text/css" />
               <link rel="stylesheet" href="<?php echo site_url('lib/own_lib/css/bootstrap.min.css'); ?>">
            <script src="<?php echo site_url('lib/own_lib/js/bootstrap.min.js'); ?>"></script>
            <script src="js/js-image-slider.js" type="text/javascript"></script> 
<script src="<?php echo site_url('lib/bootbox-alert/bootbox.js'); ?>"></script>
<style type="text/css">
	#sublink .active1 { dcolor: #cea148; }
</style>

<script type="text/javascript" src="js/logic.js"></script>
<link rel="stylesheet" href="css/others.css" />
</head>

<body>
   
    	<div id="wrapper">
            <?php if(!isset($_GET['page'])){?>
            
    	<div id="wrap-top">
        	
            <div id="slider" style="width:100%; margin:auto;">
                <img src="images/ban1.jpg" alt="BuffPod" title="BuffPod"/>
                <img src="images/ban2.jpg" alt="BuffPod" title="BuffPod" />
                <img src="images/ban3.jpg" alt="BuffPod" title="BuffPod" />
                <img src="images/ban4.jpg" alt="BuffPod" title="BuffPod" />
                <img src="images/ban5.jpg" alt="BuffPod" title="BuffPod"/>
                <img src="images/ban6.jpg" alt="BuffPod" title="BuffPod" />
            </div><!-- slider -->

            
            <div id="banLink">
            	<a href="#">SIGN UP FREE</a>
            </div><!-- banLink -->
                    <?php }else{ ?>
            <style>
                body #wrapper{padding-top: 110px !important;}
            </style>
                    <?php } ?>
            <div id="header">
            	<div id="header-big">
                    <div id="header-big-in">
                        <div id="logo">
                            <img src="images/logo.png" height='70' width="174" title="Buffpod" />
                        </div><!-- logo -->
                        
                        <div id="menu">
                            <div id="links">
                                <div id="sublink" style="border-left:none;">
                                    <a href="index" class="active1" title="Buffpod">HOME</a>
                                </div><!--sublink-->
                                <div id="sublink" style="border-left:none;">
                                    <a href="#" class="active2" title="Buffpod">ABOUT US</a>
                                </div><!--sublink-->
                                <div id="sublink" style="border-left:none;">
                                    <a href="#" class="active3" title="Buffpod">HOW IT WORKS</a>
                                </div><!--sublink-->
                                <div id="sublink">
                                    <a href="#" class="active4" title="Buffpod">CONTACT</a>
                                </div><!--sublink-->
                                <div class="clear"></div>
                            </div><!--links-->
                            <div style="clear:both;"></div>
                        </div><!-- menu -->
                        
                        <div id="memArea">
                            <?php if(isset($_SESSION['user']) && count($_SESSION['user'])>0){?>
                             <div id="Logout">
                                 <a href="<?php echo site_url('?action=logout');?>" >
                                   <img src="images/login-icon.png" height="12" width="16" /> 
                                    logout
                                </a>
                            </div><!-- memAreaL -->    <div id="Profile" class="login">
                                <a href="<?php echo site_url('?page=profile');?>" >
                                    <img src="images/signup-icon.png" height="12" width="14" />
                                    Profile
                                </a>
                            </div><!-- memAreaR -->
                            
                                
                            <?php }else{?>
                            <div id="memAreaR" class="login">
                                <a href="#" id="signinLink">
                                    <img src="images/login-icon.png" height="12" width="16" />
                                    LOGIN
                                </a>
                            </div><!-- memAreaR -->
                            <div id="memAreaL">
                                <a href="#" id="signupLink">
                                    <img src="images/signup-icon.png" height="12" width="14" />
                                    SIGN UP
                                </a>
                            </div><!-- memAreaL -->
                            <?php } ?>
                            <div style="clear:both;"></div>
                        </div><!-- memArea -->
                        <div style="clear:both;"></div>
                    </div><!-- header-big-in -->
                </div><!-- header-big -->            </div><!-- header -->
        </div><!-- wrap-top -->
       