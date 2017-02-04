<?php 
include '../../lib/setting.php';
include '../../lib/conn.php';
include '../../lib/functions.php';
include '../../lib/mainlib.php';
$obj=New mainlib(HOST,USER,PASS,DB);
include '../catarray.php';
$day=$_POST['day'];
$ID=$_POST['id'];

//$_SESSION['booking']=array();
//echo '<pre>'; #print_R($_POST); 
$v=explode('/',$day);
//
$date= $v[2].'-'.$v['0'].'-'.$v['1'];
//date('Y-m-d')
$_SESSION['booking']['date']=$date;

$dateno= date('N',strtotime($date)); 

if($dateno==7)
{
    $dateno=0;
}
$_SESSION['booking']['day']=$dateno;
$whr=" ID='".$ID."' and days='".$dateno."'";
$v=$obj->selectq('bp_users_days','*',$whr );




$v1=explode('-',($v[0]->time));
$days=json_decode(base64_decode($v1[0]));
$t=$obj->timeselect();
echo '<br><label>Booking Time</label><div class="timebox">';
foreach($days as $v)
{ 
   if(array_key_exists ( $v , $t))
   {
       $whr=" booking_time='".$v."' and  booking_date='".$date."'";
       $v11=$obj->selectq('bp_booking','booking_time',$whr );
       if(count($v11)>0)
       {    
           echo '<div class=" col-lg-6 col-md-6 col-sm-6 col-xs-12 alert alert-success">'
       . '<label>'
       . '<input disabled="disabled" value="'.$v.'" name="selecttime" class="selecttime" type="radio">&nbsp;&nbsp;'.$t[$v].'<span class="msg">This Time Already Booked</span></label>'
       . '</div>';
       }else{
       
       echo '<div class=" col-lg-6 col-md-6 col-sm-6 col-xs-12 alert alert-success">'
       . '<label>'
       . '<input value="'.$v.'" name="selecttime" class="selecttime" type="radio">&nbsp;&nbsp;'.$t[$v].'</label>'
       . '</div>';
       }
   }
}
echo '<div style="clear:both;"></div></div>';
?> 
<style>.selecttime{float:left;} .msg{ display: block;
    font-size: 10px;}</style>
