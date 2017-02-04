<div id="page-wrapper">

    <div class="row">
   
            <h3 class="page-header">Manage Charity Amount</h3>

    </div>
    <!-- /.row -->
    <div class="row">
         <div class="panel panel-default">
                <div class="panel-body">
                   
                          <?php 
                          $ses_msg = $this->session->flashdata("success_msg");
                    if(!empty($ses_msg)){?>
                            <div class="alert alert-success fade in" style="margin-top:18px;">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                              <?php echo $ses_msg; ?>
                            </div>
                            <?php }
                   
                          $ses_msg  = $this->session->flashdata("error_msg");
                              if(!empty($ses_msg)){?>
                            <div class="alert alert-danger fade in" style="margin-top:18px;">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                              <?php echo $ses_msg; ?>
                            </div>
                            <?php }
                    
                    
                    ?>
                    
                        <!-- charity table -->
                         <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Charity User</th>
                                <th>Charity Name</th>
                                <th>Donation Charity Name</th>
                                <th>Donation Amount</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                             if (!empty($all_records)) {

                                foreach ($all_records as $key => $record) {
                                    ?>
                                    <tr>
                                        <td><?php
                                              echo $record['fname']." ".$record['lname'];
                                            ?>
                                        </td>
                                        <td><?php
                                              echo $record['charity_name'];
                                            ?>
                                        </td>
                                         <td><?php
                                              echo $record['sub_charity_name'];
                                            ?>
                                        </td>
                                          <td><?php
                                              echo $record['donate-amount'];
                                            ?>
                                        </td>
                                      
                                       <td>
                                          <a href="<?php echo base_url("charity/edit_charity_amount/".$record['ID']); ?>" ><span class="glyphicon glyphicon glyphicon-edit"></span></a>
                   
                                       </td>
                                    </tr>
                                    <?php
                                }
                            } else {?>
                                    <tr><td colspan="5" style="text-align: center;">Data Not  Available</td> </tr>
                            <?php }
                            ?>



                        </tbody>
                    </table>

                    <div class="col-md-12" style="text-align: left;"> <?php echo $pagination; ?> </div>
                 
                    
                    
               
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
     
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>

