<div id="page-wrapper">

    <div class="row">
   
            <h3 class="page-header">Manage Charity</h3>

    </div>
    <!-- /.row -->
    <div class="row">
         <div class="panel panel-default">
                <div class="panel-body">
                    <a href="<?php echo base_url("charity/add_subcharity"); ?>" class="btn btn-info">Add Sub Charity </a>
                    <a href="<?php echo base_url("charity"); ?>" class="btn btn-info">View Charity </a>
                    
                    <?php 

                    $msg = $this->session->flashdata("success_msg");
                    if(!empty($msg)){?>
                            <div class="alert alert-success fade in" style="margin-top:18px;">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                              <?php echo $msg; ?>
                            </div>
                            <?php }
                   
                   $msg1 = $this->session->flashdata("error_msg");
                              if(!empty($msg1)){?>
                            <div class="alert alert-danger fade in" style="margin-top:18px;">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                              <?php echo $msg1; ?>
                            </div>
                            <?php }
                    
                    
                    ?>
                    
                    
                    <!-- charity table -->
                         <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Parent Charity Name</th>
                                <th>Donation Amount</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
//                            print_r($all_records);
                            
                             if (!empty($all_records)) {
                                foreach ($all_records as $key => $record) {
                                    ?>
                                    <tr>
                                        <td><?php echo $record['sub_charity_name']; ?></td>
                                        <td><?php
                                              echo $record['charity_name'];
                                            ?>
                                        </td>
                                        <td><?php echo $record['donation'];?></td>
                                       <td>
                                        <?php
                                            if (!empty($record['status'])) {
                                                echo "Active";
                                            } else {
                                                echo "Not Active";
                                            }
                                            ?></td>
                                       <td>
                                                 <a href="<?php echo base_url("charity/add_subcharity/".$record['id']); ?>" ><span class="glyphicon glyphicon glyphicon-edit"></span></a>
                                       </td>
                                    </tr>
                                    <?php
                                }
                            } else {?>
                                    <tr><td colspan="5" style="text-align: center;">No Sub Charity Available</td> </tr>
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

