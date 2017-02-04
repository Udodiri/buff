<div id="page-wrapper">

    <div class="row">
       
            <h3 class="page-header">Manage User</h3>
     
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-3" style="margin-bottom: 5%;">
                        Users as : <select name="usertype" id="usertype" class="form-control">
                            <option value="">All Users</option>
                            <?php foreach ($this->config->item('usertypes') as $key => $utype) { ?>
                                <option value="<?php echo $key; ?>" <?php
                                if (!empty($setusertype) && $setusertype == $key) {
                                    echo "selected='selected'  ";
                                }
                                ?>   ><?php echo $utype ?></option>
                                    <?php }
                                    ?>
                        </select>
                    </div>

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>User Type</th>
                                <th>Location</th>
                                <th>Email</th>
                                <th>Status</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
//        print_r($all_records);

                            if (!empty($all_records)) {
                                foreach ($all_records as $key => $record) {
                                    ?>
                                    <tr>
                                        <td><?php
                                            $fname = !empty($record['fname']) ? $record['fname'] : "";
                                            $lname = !empty($record['lname']) ? $record['lname'] : "";
                                            echo $fname . " " . $lname;
                                            ?></td>
                                        <td><?php
                                            if (!empty($record['utype']) && $record['utype'] == "2") {
                                                echo "Consultant";
                                            } else if (!empty($record['utype']) && $record['utype'] == "3") {
                                                echo "Seeker";
                                            }
                                            // else if (!empty($record['utype']) && $record['utype'] == "4") {
                                            //     echo "Charity User";
                                            // }  else {
                                                
                                            // }
                                            ?></td>
                                        <td><?php
                                            if (!empty($record['location'])) {
                                                echo $record['location'];
                                            } else {
                                                
                                            }
                                            ?></td>
                           <!--             <td>?php if(!empty($record['city'])){echo $record['city'];}else{} ?></td>-->
                                        <td><?php
                                            if (!empty($record['emailId'])) {
                                                echo $record['emailId'];
                                            } else {
                                                
                                            }
                                            ?></td>
                                        <td><?php
                                            if (!empty($record['status'])) {
                                                echo "Active";
                                            } else {
                                                echo "Not Active";
                                            }
                                            ?></td>
                                    </tr>
                                    <?php
                                }
                            } else {?>
                                    <tr><td colspan="5" style="text-align: center;">No Users Available</td> </tr>
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
    $("#usertype").change(function () {
        var usertype = $("#usertype").val();
        $.post("<?php echo base_url("user/set_user_type"); ?>", {usertype: usertype}).done(function ($res) {
           // location.reload();
            window.location="<?php echo base_url('user');?>";
        });

    });
</script>