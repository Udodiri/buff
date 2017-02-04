<div id="page-wrapper">

    <div class="row">

        <h3 class="page-header">Settings</h3>

    </div>
    <!-- /.row -->
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-body">
                <?php echo validation_errors(); ?>
                <form action="<?php echo site_url('Setting'); ?>" method="post">

                    <h3 style="border-bottom: 1px solid ">Tok-box</h3>

                    <table class="table">
                        <tr><th>Api Key</th><td><input value="<?php echo $api; ?>" class="form-control" type="text" name="api"></td></tr>
                        <tr><th>Secret key</th><td><input  value="<?php echo $secrit; ?>" class="form-control" type="text" name="secrit"></td></tr>

                    </table>
                    <h3 style="border-bottom: 1px solid "><label><input type="radio" <?php
                            if ($payment == 'test') {
                                echo 'checked="checked"';
                            }
                            ?> value="test" name="payment"> Strip Test</label>   </h3>
                    <table class="table">
                        <tr><th>Api public Key</th><td><input value="<?php echo $strip_test_api; ?>" class="form-control" type="text" name="strip_test_public"></td></tr>
                        <tr><th>Secret key</th><td><input  value="<?php echo $strip_test_secrit; ?>" class="form-control" type="text" name="strip_test_secrit"></td></tr>

                    </table>

                    <h3 style="border-bottom: 1px solid "><label><input type="radio"  <?php
                            if ($payment == 'live') {
                                echo 'checked="checked"';
                            }
                            ?>   value="live" name="payment"> Strip Live</label> </h3>
                    <table class="table">
                        <tr><th>Api public Key</th><td><input value="<?php echo $strip_live_api; ?>" class="form-control" type="text" name="strip_live_public"></td></tr>
                        <tr><th>Secret key</th><td><input  value="<?php echo $strip_live_secrit; ?>" class="form-control" type="text" name="strip_live_secrit"></td></tr>
                    </table>
                    <hr>

                    <table class="table">
                        <tr>
                            <th>Website Live</th><td>
                                <label><input type="radio" name="site_live" <?php
                                    if ($site_live == 1) {
                                        echo 'checked="checked"';
                                    }
                                    ?> value="1"> Yes</label>
                                <label><input type="radio" name="site_live" <?php
                                    if ($site_live == 0) {
                                        echo 'checked="checked"';
                                    }
                                    ?>  value="0"> No</label>
                            </td>
                        </tr>


                    </table>


                      <hr>

                  <!--   <table class="table">
                        <tr>
                            <th>Trial Period Expire Date</th><td>
                                <label><input type="text" name="expire_date" /> Yes</label>
                                
                            </td>
                        </tr>


                    </table> -->




                    <input  class="btn btn-info" type="submit" name="save">
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

