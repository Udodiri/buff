<?php
include '../../lib/setting.php';
include '../../lib/conn.php';
include '../../lib/functions.php';
include '../../lib/mainlib.php';
$obj=New mainlib(HOST,USER,PASS,DB);
include '../catarray.php';
$_SESSION['booking']['cat_reason']=$_POST['cat_reason'];
#$obj->arra($_SESSION['booking']); 
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

