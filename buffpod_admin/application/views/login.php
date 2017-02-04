<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Buffpod</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url("assets/vendor/bootstrap/css/bootstrap.min.css");?>" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url("assets/vendor/metisMenu/metisMenu.min.css");?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url("assets/dist/css/sb-admin-2.css");?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url("assets/vendor/font-awesome/css/font-awesome.min.css");?>" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js");?>" ></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js");?>" ></script>
    <![endif]-->
    
    
        <!-- jQuery -->
    <script src="<?php echo base_url("assets/vendor/jquery/jquery.min.js");?>" ></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url("assets/vendor/bootstrap/js/bootstrap.min.js");?>" ></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url("assets/vendor/metisMenu/metisMenu.min.js");?>" ></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url("assets/dist/js/sb-admin-2.js");?>" ></script>

</head>

<body>
    
    <?php 
 
  $this->form_validation->set_error_delimiters('<div class="error" style="color:red;font-size:12px;">', '</div>'); 
    ?>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <?php
                        if($this->session->flashdata("login_error")){?>
                            <div class="alert alert-danger fade in">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                                 <?php  echo $this->session->flashdata("login_error"); ?>
                            </div>
                           
                       <?php }
                        ?>
                        
                        
                        <form role="form" action="<?php echo base_url("login"); ?>" method="POST" >
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                    <?php echo form_error('email'); ?>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                    <?php echo form_error('password'); ?>
                                </div>
                                <div class="checkbox hide">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" class="btn btn-lg btn-success btn-block" value="Login" />
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>

</html>
