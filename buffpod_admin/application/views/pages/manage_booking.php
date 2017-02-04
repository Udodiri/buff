<div id="page-wrapper">

    <div class="row">
   
            <h3 class="page-header">Manage Booking</h3>

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


                    <div class="col-md-3" style="margin-bottom: 5%;">
                        Booking Status : <select name="booking_type" id="booking_type" class="form-control">
                            <option value="" >All</option>
                            <?php foreach ($this->config->item('booking_status') as $key => $bktype) { ?>
                                <option value="<?php echo $key; ?>" <?php
                                if (!empty($setbookingtype) && $setbookingtype == $key) {
                                    echo "selected='selected'  ";
                                }
                                ?>   ><?php echo $bktype ?></option>
                                    <?php }
                                    ?>
                        </select>
                    </div>
                    
                        <!-- charity table -->
                         <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Booked by</th>
                                <th>Consultant Name</th>
                                <th>Booked Time</th>
                                <th>Booking Date</th>

                                <th>Amount($)</th>
                                <th>Donation Amount($)</th>
                                <th>Consultant Pay($)</th>
                                <th>Buffpod Pay($)</th>
                                
                                <!-- <th>Total Amount</th> -->
                                <th>Booking Status</th>
                                <th>Payment Status</th>


                            </tr>
                        </thead>

                        <tbody>
                            <?php
                             if (!empty($all_records)) {
//                               echo "<pre>";
//                               print_r($all_records[0]);
//                               die;
//                               $bk = base64_decode($all_records[0]['booking_data']);
//                              $bk_data = json_decode($bk,true);
//                               echo '<pre>';
//                               print_r($bk_data);


                             //  $t = timeselect($all_records[0]['booking_time'],true);
                             //  echo $t;
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
                                             $time = timeselect($record['booking_time'],true);
                                             echo $time;
                                            ?>
                                        </td>
                                          <td><?php
                                              echo $record['booking_date'];
                                            ?>
                                        </td>

                                        <td><?php
                                              $bk = base64_decode($record['booking_data']);

                                              $bk_data = json_decode($bk,true);

                                              echo $bk_data['amount'];
                                            ?>
                                        </td>
                                        
                                        <td><?php

                                            if(!empty($bk_data['donate'])){echo $bk_data['donate'];}else{echo "--";}
                                              
                                            ?>
                                        </td>
                                        
                                         <td>
                                            <?php  if(!empty($bk_data['consultant_pay'])){ echo $bk_data['consultant_pay'];}else{ echo "--"; } ?>
                                        </td>
                                        
                                        <td>
                                            <?php if(!empty($bk_data['buffpod_pay'])){ echo $bk_data['buffpod_pay'];}else{echo "--";} ?>
                                        </td>

                                        <!-- <td>?php
                                              echo $bk_data['totalamount'];
                                            ?>
                                        </td> -->
                                        
                                        <td><?php
                                              switch ($record['booking_status']) {
                                                case '1':
                                                    echo "Approved";
                                                  break;
                                                case '2':
                                                    echo "Pending";
                                                  break;
                                                case '3':
                                                    echo "Completed";
                                                  break;
                                                case '4':
                                                    echo "Unapproved";
                                                  break;
                                                
                                                default:
                                                  echo "not available";
                                                  break;
                                              }
                                             
                                            ?>
                                        </td>

                                        <td>
                                          <?php if(!empty($record['payment_status']) && $record['payment_status']==1){echo "Complete";}else{echo "In Process";} ?>
                                        </td>

                                      
                                      
                                    </tr>
                                    <?php
                                }
                            } else {?>
                                    <tr><td colspan="8" style="text-align: center;">Records Not Founds</td> </tr>
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


<script type="text/javascript">
    $("#booking_type").change(function () {
        var booking_type = $("#booking_type").val();
        $.post("<?php echo base_url("booking/set_booking_type"); ?>", {booking_type: booking_type}).done(function (res) {
           // alert(res);
           window.location="<?php echo base_url('booking/manage_booking'); ?>";
        });

    });
</script>