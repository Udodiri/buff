
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-users fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php if(!empty($count_consultant)){echo $count_consultant;}else{echo "0";} ?></div>
                                    <div>Total Consultant</div>
                                </div>
                            </div>
                        </div>
                        <!-- <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a> -->
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-users fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php if(!empty($count_seekar)){echo $count_seekar;}else{echo "0";} ?></div>
                                    <div>Total Seeker</div>
                                </div>
                            </div>
                        </div>
                        <!-- <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a> -->
                    </div>
                </div>
              <!--   <div class="col-lg-4 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-users fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">?php if(!empty($count_charityuser)){echo $count_charityuser;}else{echo "0";} ?></div>
                                    <div>Total Charity User</div>
                                </div>
                            </div>
                        </div>
                       <!--  <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a> --
                    </div>
                </div> -->
               <!--  <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">13</div>
                                    <div>Support Tickets!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div> -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">

                            <?php 
                                // echo "<pre>";
                                // echo $graph_data;
                                

                            ?>
                            <i class="fa fa-bar-chart-o fa-fw"></i> Consultant/Seeker Chart
                           <!--  <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Actions
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="#">Action</a>
                                        </li>
                                        <li><a href="#">Another action</a>
                                        </li>
                                        <li><a href="#">Something else here</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div> -->
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="morris-area-chart"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
               
                    <!-- /.panel -->
                    
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->
                
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>

<script>
$(function() {

    Morris.Area({
  element: 'morris-area-chart',
  data: [
    { y: '2016', a: "<?php echo $count_consultant;?>", b: "<?php echo $count_seekar;?>" },
    { y: '2017', a: 0,  b: 0 },
    { y: '2018', a: 0,  b: 0 },
    { y: '2019', a: 0,  b: 0 },
    { y: '2020', a: 0,  b: 0 },
    { y: '2021', a: 0,  b: 0 },
    { y: '2022', a: 0, b: 0 }
  ],

  // data: <?php echo trim($graph_data); ?>,
  xkey: 'y',
  ykeys: ['a', 'b'],
  labels: ['Consultant', 'Seeker']
 });

 
    
});

</script>