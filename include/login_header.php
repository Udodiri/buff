<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>BuffPod</title>
        <link rel="shortcut icon" href="images/fav.png" />
        <link rel="stylesheet" href="css/animation.css" />
        <link rel="stylesheet" href="css/layout.css" />
        <script type="text/javascript" src="js/jquery-1.10.2.js"></script>
        <script src="http://malsup.github.com/jquery.form.js"></script> 
        <!-- for banner slider -->
        <link href="css/js-image-slider.css" rel="stylesheet" type="text/css" />
        <script src="js/js-image-slider.js" type="text/javascript"></script> 

        <style type="text/css">
            #sublink .active1 { dcolor: #cea148; }
        </style>

        <script type="text/javascript" src="js/logic.js"></script>
        <link rel="stylesheet" href="css/others.css" />

        <link rel="stylesheet" href="<?php echo site_url('lib/own_lib/css/bootstrap.min.css'); ?>">
            <script src="<?php echo site_url('lib/own_lib/js/jquery.min.js'); ?>"></script>
            <script src="<?php echo site_url('lib/own_lib/js/bootstrap.min.js'); ?>"></script>
            <script src="http://ckeditor.com/latest/ckeditor.js"></script>
            <link rel="stylesheet" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">
                <link rel="shortcut icon" href="../favicon.ico">
                    <link rel="stylesheet" type="text/css" href="<?php echo site_url('lib/leftmenu/css/normalize.css'); ?>" />
                    <link rel="stylesheet" type="text/css" href="<?php echo site_url('lib/leftmenu/css/demo.css'); ?>" />
                    <link rel="stylesheet" type="text/css" href="<?php echo site_url('lib/leftmenu/css/icons.css'); ?>" />
                    <link rel="stylesheet" type="text/css" href="<?php echo site_url('lib/leftmenu/css/component.css'); ?>" />
                    <script src="<?php echo site_url('lib/leftmenu/js/modernizr.custom.js'); ?>"></script>
                    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
                        <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
                        </head>
                        <body>  <div id="st-trigger-effectss" class="column"><img src="images/logo.png" height="70" width="174" title="Buffpod">
                                    <button data-effect="st-effect-1"><i id="button" class="fa fa-close"></i></button><div class="pull-right looutbtn"><img src="<?php echo site_url('images/profile/' . $_SESSION['user']->images); ?>" /> Hello <a href="<?php echo site_url('?page=profile'); ?>"> <?php echo $_SESSION['user']->fname; ?></a>&nbsp;<a href="<?php echo site_url('?action=logout'); ?>">Logout</a></div>
                            </div>
                            <div id="st-container" class="st-container  st-effect-1 st-menu-open">
                                <!-- 	
                                        example menus 
                                        these menus will be on top of the push wrapper
                                -->
                                <nav class="st-menu st-effect-1" id="menu-1">
                                    <h2 class="icon icon-lab">Sidebar</h2>
                                    <ul>




                                        <?php if ($_SESSION['user']->utype == 2) { //User Type is Consultant?>
                                            <li><a class="icon icon-calendar" href="<?php echo site_url('?page=calender#Profilepage'); ?>">Calendar</a></li>
                                            <li><a class="icon icon-user" href="<?php echo site_url('?page=profile#Profilepage'); ?>">Profile</a></li>
                                            <li><a class="icon icon-location" href="<?php echo site_url('?page=mybookings_consultant'); ?>">My Booking</a></li>
                                            
                                            <li><a class="icon icon-lock" href="<?php echo site_url('?action=logout'); ?>">Logout</a></li>
                                        <?php } else { ?>

                                            <li><a class="icon icon-user" href="<?php echo site_url('?page=profile#Profilepage'); ?>">Profile</a></li>
                                            <li><a class="icon icon-search" href="<?php echo site_url('?page=searchconsultant#Profilepage'); ?>">Search Consultant</a></li>
                                             <li><a class="icon icon-location" href="<?php echo site_url('?page=bookinghistory'); ?>">My Booking</a></li>
                                            <li><a class="icon icon-lock" href="<?php echo site_url('?action=logout'); ?>">Logout</a></li>
                                            

                                        <?php } ?>
                                            <li class="feedback" data-toggle="modal" data-target="#FeedbackForm"><a style="text-decoration:none;" class="icon icon-note" href="#">Feedback</a></li>
                                    </ul>
                                </nav>

                                <div ID="Profilepage" class=" showcontein"> 
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 overflows">
                                        <!-- content push wrapper -->

