<?php
include '../../lib/setting.php';
include '../../lib/conn.php';
include '../../lib/functions.php';
include '../../lib/mainlib.php';
$obj=New mainlib(HOST,USER,PASS,DB);
include '../catarray.php';
$Specializ;
$_SESSION['booking']['time']=$_POST['day'];
$_SESSION['booking']['ID']=$_POST['id'];
//echo '<pre>';
#print_r($_SESSION['booking']); 
//print_r($_SESSION['user']);
#print_R($_POST);  
$user=$obj->userinfo($_POST['id']);
#print_R($user); 
$selection=array();
foreach($user['specilization'] as $k=>$v)
{
    $user['specilization'][$k]=$user['specilization'][$k]['specilization'];
    $cat=explode('-',$user['specilization'][$k]);
    $selection[$user['specilization'][$k]]=$Specializ[$cat[0]][1][$cat[1]];
}
//print_R($selection); ?>
<div><label>Date Of Booking: </label><input class="form-control" type="text" disabled="true" value="<?php echo date('d-m-Y',strtotime($_SESSION['booking']['date'])); ?>" >
</div><div><label>Booking Time: </label><input class="form-control" type="text" disabled="true" value="<?php echo $obj->timeselect($_SESSION['booking']['time'],true); ?>" >
</div><label>Select category</label>
<select id="catselection" name="cat" class="form-control">
    <option value="0">Select</option> 
    <?php foreach($selection as $k=>$v){ ?>
    <option value="<?php echo $k; ?>"><?php echo $v; ?></option>
    <?php } 
    if(isset($user['financial_profile']['donate-amount']) && $user['financial_profile']['donate-amount']>0)
    {  
        $_SESSION['booking']['donate']=$user['financial_profile']['donate-amount'];
    }else{
        $_SESSION['booking']['donate']=0;
    } 
    $_SESSION['booking']['totalamount']=($user['financial_profile']['hourlyrate']);
    ?>
</select>

<div><label>Reason: </label>
    <textarea class="form-control reason_desc" id="cat_reason" > <?php echo $_SESSION['booking']['cat_reason']; ?> </textarea>
</div>

<div><label>Booking Amount: </label><input class="form-control" type="text" disabled="true" value="$<?php echo $user['financial_profile']['hourlyrate'].'.00'; ?>" > </div>
    <div class="hide"><label>Booking Amount: </label><input class="form-control pay" type="text" disabled="true" value="<?php echo $user['financial_profile']['hourlyrate']; ?>" > </div>
<div><label>Amount given to charity: </label><input class="form-control" type="text" disabled="true" value="$<?php echo $user['financial_profile']['donate-amount'].'.00'; ?>" >    </div>
<div class="hide"><label>Total Amount: </label><input class="form-control" type="text" disabled="true" value="$<?php echo ($user['financial_profile']['donate-amount']+$user['financial_profile']['hourlyrate']).'.00'; ?>" > </div>        
   

