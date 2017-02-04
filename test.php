<?php 
"(`month` IN ('apr','may','june','july','aug','sep','oct','nov','dec') AND year=2016)";
$q="SELECT SUM(amout) FROM `tesing_year_data` WHERE ";
$q1=$q2='';
$Addquery=0;
$a=Array(2);
$Oldyear=array();
$Newyear=array();
$oldq=0;
$newq=0;
foreach($a as $v)
{
    if($v>=4 &&$v<=12)
    {
        $Oldyear[]="'".strtolower(date('M',strtotime(date('2016-'.$v.'-14'))))."'";
       $oldq++;
       
    }
    if($v>=1 && $v<=3)
    {
         $Newyear[]="'".strtolower(date('M',strtotime(date('2016-'.$v.'-14'))))."'";
        $newq++;
    }
}

if($oldq>0)
{
    $q.="(`month` IN (".(implode(',',$Oldyear)).") AND year=2016)";
}
if($oldq>0 && $newq>0)
{
    $q.=' or ';
}
if($newq>0)
{
    $q.="(`month` IN (".(implode(',',$Newyear)).") AND year=2017)";
}

echo $q;




