<div id="page-wrapper">

    <div class="row">

        <h3 class="page-header">Add Sub Charity</h3>
    
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-body">
                <?php
                echo validation_errors();

                
                 ?>
                <form class="form-horizontal" action="<?php echo base_url("charity/add_subcharity/".$this->uri->segment(3)) ?>" method="POST" > 
                
                    <div class="form-group">
                        <label class="control-label col-sm-2 col-md-2" for="email">Select Charity:</label>
                        <div class="col-sm-6 col-md-6">
                            <select id="charity_name" name="charity_name" class="form-control">
                                <option value="">--Select Parent Charity</option>
                                <?php
                                foreach($charities as $k=>$v){?>
                                <option value="<?php echo $v['id']; ?>" <?php if(!empty($prv_data) && $prv_data['parent_id']==$v['id']){echo "selected='selected' ";} ?>     ><?php echo $v['charity_name']; ?></option>
                                    
                                    <?php }
                                ?>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-sm-2 col-md-2" for="email">Sub Charity Name:</label>
                        <div class="col-sm-6 col-md-6">
                            <input type="text" class="form-control" name="s_charity_name" id="s_charity_name" value="<?php if(!empty($prv_data)){echo $prv_data['sub_charity_name'];} ?>"   placeholder="Enter the sub charity name">
                        </div>
                    </div>


                     <div class="form-group">
                        <label class="control-label col-sm-2 col-md-2" for="email">Donation Amount:</label>
                        <div class="col-sm-6 col-md-6">
                            <input type="text" class="form-control" name="donation" id="donation" value="<?php if(!empty($prv_data)){echo $prv_data['donation'];} ?>"   placeholder="Enter the donation amount">
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
                                <option value="<?php echo $k; ?>" <?php if(!empty($prv_data['status'])){echo "selected='selected' ";} ?>  ><?php echo $v; ?></option>
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

