<div id="page-wrapper">

    <div class="row">

        <h3 class="page-header">Edit Admin Profile</h3>

    </div>
    <!-- /.row -->
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-body">
                <form class="form-horizontal" action="<?php echo base_url("admin/edit_profile") ?>" method="POST" >

                    <?php
                   
                     $session_data = $this->session->userdata('login_data');
                 
                     echo validation_errors();

                     if ($this->session->flashdata('update_success')) {?>
                         <div class="alert alert-success fade in" style="margin-top:18px;">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                            <?php echo $this->session->flashdata('update_success'); ?>
                        </div>
                     <?php }


                     if ($this->session->flashdata('update_error')) {?>
                         <div class="alert alert-danger fade in" style="margin-top:18px;">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                            <?php echo $this->session->flashdata('update_error'); ?>
                        </div>
                     <?php }

                   ?>

                     <input type="hidden" name="prv_id" value="<?php echo $session_data['ID'];?>" />

                    <div class="form-group">

                        <label class="control-label col-sm-2 col-md-2" for="email">First Name:</label>
                        <div class="col-sm-6 col-md-6">
                            <input type="text" class="form-control" name="first_name" id="first_name" value="<?php if(!empty($session_data['fname'])){echo $session_data['fname'];}else{echo set_value('first_name');} ?>" placeholder="Enter the first name">
                            
                        </div>
                    </div>
                  
                   <div class="form-group">
                        <label class="control-label col-sm-2 col-md-2" for="email">Last Name:</label>
                        <div class="col-sm-6 col-md-6">
                            <input type="text" class="form-control" name="last_name" id="last_name" value="<?php if(!empty($session_data['lname'])){echo $session_data['lname'];}else{echo set_value('last_name');} ?>" placeholder="Enter the last name">
                            
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2 col-md-2" for="email">Current Password:</label>
                        <div class="col-sm-6 col-md-6">
                            <input type="password" class="form-control" name="old_password" id="old_password" value="<?php echo set_value('old_password'); ?>" placeholder="Enter the old password">
                            
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2 col-md-2" for="email">New Password:</label>
                        <div class="col-sm-6 col-md-6">
                            <input type="password" class="form-control" name="new_password" id="new_password" value="<?php echo set_value('new_password'); ?>" placeholder="********">
                            
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2 col-md-2" for="email">Confirm Password:</label>
                        <div class="col-sm-6 col-md-6">
                            <input type="password" class="form-control" name="cnf_password" id="cnf_password" value="<?php echo set_value('cnf_password');?>" placeholder="********">
                            
                        </div>
                    </div>
                
                    <div class="form-group"> 
                        <div class="col-sm-offset-2 col-sm-6 col-md-6">
                            <button type="submit" class="btn btn-default">Submit</button>
                        </div>
                    </div>
                </form>

                <!-- /.row (nested) -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->

        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>

