<div id="page-wrapper">

    <div class="row">

        <h3 class="page-header">Add Charity</h3>

    </div>
    <!-- /.row -->
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-body">
                <form class="form-horizontal" action="<?php echo base_url("charity/add_charity/".$this->uri->segment(3)) ?>" method="POST" >
                    <div class="form-group">
                        <label class="control-label col-sm-2 col-md-2" for="email">Charity Name:</label>
                        <div class="col-sm-6 col-md-6">
                            <input type="text" class="form-control" name="charity_name" id="charity_name" value="<?php if(!empty($prv_charity)){echo $prv_charity['charity_name'];} ?>" placeholder="Enter the charity name">
                            
                            <input type ="hidden" name="prv_id" value="<?php echo $this->uri->segment(3); ?>" />
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2 col-md-2" for="pwd">Status:</label>
                        <div class="col-sm-6 col-md-6">
                            <?php 
                            $status_data=array("0"=>"No","1"=>"Yes");
                            ?>
                            <select id="status" name="status" class="form-control">
                                <option value="">--Select Status--</option>
                                <?php
                                foreach($status_data as $k=>$v){?>
                                <option value="<?php echo $k; ?>" <?php if(!empty($prv_charity['status'])){echo "selected='selected' ";} ?>  ><?php echo $v; ?></option>
                                    <?php }
                                ?>
                            </select>
                           
                            
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

