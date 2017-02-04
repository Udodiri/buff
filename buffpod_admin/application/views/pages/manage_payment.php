<div id="page-wrapper">

    <div class="row">
   
            <h3 class="page-header">Payment Information</h3>

    </div>
    <!-- /.row -->
    <div class="row">
         <div class="panel panel-default">
                <div class="panel-body">
                   
                                        
                        <!-- charity table -->
                         <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Payment by</th>
                                <th>Payment For</th>
                                <th>Invoice Number</th>
                                <th>Transaction Id</th>

                                <th>Payment Type</th>
                                <th>Payment Date</th>
                                <th>Payment Status</th>


                            </tr>
                        </thead>

                        <tbody>
                            <?php
                             if (!empty($all_records)) {
                             //  echo "<pre>";
                              
                             //  echo "<pre>";
                             //  print_r($all_records[0]);

                             //  $bk = base64_decode($all_records[0]['payment_data']);

                             // $bk_data = json_decode($bk,true);

                             //  echo '<pre>';
                             //  print_r($bk_data);


                              
                             //  die;

                                foreach ($all_records as $key => $record) {
                                    ?>
                                    <tr>
                                        <td><?php
                                              echo $record['seekar_name'];
                                            ?>
                                        </td>
                                        <td><?php
                                              echo $record['consultant_name'];
                                            ?>
                                        </td>
                                          <td><?php
                                              echo $record['invoiceno'];
                                            ?>
                                        </td>

                                          <td><?php
                                              echo $record['trns_ID'];
                                            ?>
                                        </td>

                                         <td>
                                          <?php if(!empty($record['payment_type']) ){echo $record['payment_type'];}else{echo "Not available";} ?>
                                        </td>
                                        
                                         <td><?php
                                              echo $record['payment_date'];
                                            ?>
                                        </td>

                                                                               
                                        <td>
                                          <?php if(!empty($record['payment_status']) && $record['payment_status']==1){echo "Complete";}else{echo "In Process";} ?>
                                        </td>

                                      
                                      
                                    </tr>
                                    <?php
                                }
                            } else {?>
                                    <tr><td colspan="5" style="text-align: center;">No Records Found</td> </tr>
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

