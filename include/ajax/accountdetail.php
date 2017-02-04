<?php
include '../../lib/setting.php';
include '../../lib/conn.php';
include '../../lib/functions.php';
include '../../lib/mainlib.php';
$obj=New mainlib(HOST,USER,PASS,DB);
include '../catarray.php';
$_SESSION['booking']['cat']=$_POST['cat'];
$_SESSION['booking']['ID']=$_POST['id'];
$_SESSION['booking']['amount']=$_POST['amount'];
#$obj->arra($_SESSION['booking']); 
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//print_R($_SESSION['booking']);
?>

<form action="" method="POST">
    <input type="hidden" name="amounts" value="<?php echo $_SESSION['booking']['amount']; ?>">
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="<?PHP ECHO PUBLICKEY; ?>"
    data-amount="<?php echo $_SESSION['booking']['totalamount']; ?>00"
    data-name="Traing Purpose"
    data-description="My training"
    data-image="<?php echo $obj->site_url('images/logo.png'); ?>"
    data-email="<?php echo $_SESSION['user']->emailId; ?>"
    data-locale="auto">
  </script>
</form>

