<?php
include '../../lib/setting.php';
include '../../lib/conn.php';
include '../../lib/functions.php';
include '../../lib/mainlib.php';
$obj=New mainlib(HOST,USER,PASS,DB);
include '../catarray.php';
//error_reporting(ALL);
$ID = $_POST['ID'];
$con = ' ID=' . $ID;
$vd = $obj->selectq('bp_users', '*', $con, 0);
/* ----------------------------Finacial Details--------------- */
$con = ' ID=' . $ID;
$vd1 = $obj->selectq('bp_financial_profile', '*', $con, 0);
$vd[0]->financial = $vd1[0];
/* ----------------------------Finacial Details--------------- */
/* ----------------------------specilization Details--------------- */
$con = ' user_id=' . $ID;
$vd2 = $obj->selectq('bp_specilization', '*', $con, 0);
$specilization = array();
$vvv = array();
foreach ($Specializ as $k => $v) {
    $vvv[$k] = $v[1];
    unset($Specializ[$k][0]);
}
foreach ($vd2 as $k => $vv) {

    $specilization[$k] = $vv->specilization;
    //arra($vv); 
}
$vd[0]->specilization = $specilization;
foreach ($vd[0]->specilization as $k => $v) {
    $value = explode('-', $v);
    $vd[0]->specilization[$k] = $vvv[$value[0]][$value[1]];
}

/* ----------------------------specilization Details--------------- */
/* -----------------------------Days Availabel--------------------- */
$con = ' ID=' . $ID;
$days = $obj->selectq('bp_users_days', '*', $con, 0);
$dayes = array("Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat");
$new_day = array();
foreach ($days as $dk => $dv) {
    $new_day['dayss'][$dayes[$dv->days]] = $dv->time;
    $new_day['mode'] = $dv->mode;
}
$vd[0]->days = $new_day;
#arra($vd);
//arra($days);
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <DIV class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <DIV class="btn btn-info btn-xs pull-right"><A href="<?PHP ECHO site_url('?page=booking&ids='.base64_encode($ID)); ?>">For Consultation  <i class="fa fa-book"></i></a></div></div>
        <br>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <img class="img-thumbnail img-responsive" src="<?php echo site_url('images/profile/' . $vd[0]->images); ?>">
        <div class="alert alert-success time"><ul>
<?php foreach ($vd[0]->days['dayss'] as $k => $v) { ?>
                    <li><?php echo $k . ':' . $v; ?></li>
                <?php } ?>
            </ul></div>

    </div>
    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
        <table class="table">
            <tr><th width="45%" valign="top"   >Consultant ID:</th><td ><?php echo '25' . $vd[0]->ID; ?></td></tr>
            <tr><th valign="top">Consultant Name:</th><td><?php echo $vd[0]->fname . ' ' . $vd[0]->lname; ?></td></tr>
            <tr><th valign="top">Consultant Location:</th><td><?php echo $vd[0]->location; ?></td></tr>
            <tr><th valign="top">Hourly Rate:</th><td>$<?php echo $vd[0]->financial->hourlyrate . '.00'; ?>/hour's</td></tr>
            </table>
    </div>
        <div><table class="table">
                <tr><th width="30%" valign="top">Consultant Category:</th><td><ul style="padding-left:27px;"><?php
                foreach ($vd[0]->specilization as $v) {
                    echo '<li>' . $v . '</li>';
                }
                ?></ul></td></tr>
            <tr><th valign="top">Consultant Bio:</th><td><?php echo $vd[0]->bio; ?></td></tr>
        </table></div>
        
        <DIV class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><DIV class="btn btn-info btn-xs pull-right"><A href="<?PHP ECHO site_url('?page=booking&ids='.base64_encode($ID)); ?>">For Consultation <i class="fa fa-book"></i></a></div><div style="clear:both;"></div></div>
</div>    <div style="clear: both;"></div>
<STYLE>
    .alert-success.time ul li{ list-style: none; FONT-SIZE: 10PX;}
    .alert-success.time ul{ padding: 10PX 0px; margin: 0px;}
    .alert-success.time{margin: 0PX; padding: 0PX;}
    a{color:#fff !important;}
    body td p,body th,td{color:#000 !importan; font-size:12px !important;}
</STYLE>
