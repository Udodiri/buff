<div id="page-wrapper">

    <div class="row">

        <h3 class="page-header">Edit Donation Amount</h3>

    </div>
    <!-- /.row -->
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-body">

                <?php 
                echo validation_errors();
              
                 ?>
                <form class="form-horizontal" action="<?php echo base_url("charity/edit_charity_amount/".$this->uri->segment(3)) ?>" method="POST" >
                    <div class="form-group">
                        <label class="control-label col-sm-2 col-md-2" for="email">Donation Amount</label>
                        <div class="col-sm-6 col-md-6">
                            <input type="text" class="form-control" name="donate_amount" id="donate_amount" value="<?php if(!empty($prv_charity)){echo $prv_charity['donate-amount'];} ?>" placeholder="Enter the donation amount">
                            
                            <input type ="hidden" name="prv_id" value="<?php echo $this->uri->segment(3); ?>" />
                            
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

