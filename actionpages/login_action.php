<?php

$_REQUEST = array_map("trim", $_REQUEST);
$_REQUEST = array_map("removedate", $_REQUEST);
unset($_REQUEST['action']);

die("call");
$condition = '';
//$condition.=" utype='" . $_REQUEST['Usertype'] . "'";
    $condition.="  emailId='" . $_REQUEST['em'] . "'";
$condition.=" and pass='" . md5($_REQUEST['pas']) . "'";

$v = $obj->selectq('bp_users', '*', $condition);
#print_R($v);
#die;
if (count($v) == 1) {
    unset($v[0]->pass);


    $user = atoobj($v[0], true);
    $condition = 'ID=' . $user['ID'];
    $v = selectq('bp_financial_profile', '*', $condition, $con);
    $financial = atoobj($v[0], true);
    $condition = 'user_id=' . $user['ID'];
    $v = selectq('bp_specilization', '*', $condition, $con);
    $specilization = atoobj($v, true);
    $condition = 'ID=' . $user['ID'];
    $v = selectq('bp_users_days', '*', $condition, $con);
    
    $users_days = atoobj($v, true);


    $datas = array();
    foreach ($specilization as $k => $v) {
        $datas['user_id'] = $specilization[$k]['user_id'];
        $datas['specilization'][$k] = $specilization[$k]['specilization'];
    }
    $days = array();
    foreach ($users_days as $k => $v) {
        $days['mode'] = $users_days[$k]['mode'];
        $time = explode('-', $users_days[$k]['time']);
        $times['to'] = $time[0];
        $times['from'] = $time[1];
        $days['days'][$users_days[$k]['days']] = atoobj($times, true);
    }
    if (count($financial) > 0) {
        $user = array_merge($user, $financial);
    }
    if (count($datas) > 0) {
        $user = array_merge($user, $datas);
    }
    if (count($days) > 0) {
        $user = array_merge($user, $days);
    }
    $_SESSION['user'] = atoobj($user, false);
    //print_R($_SESSION['user']);
    $_SESSION['user']->days = $days['days'];
    $_SESSION['user']->carddetails = base64_decode($_SESSION['user']->carddetails);
    $_SESSION['user']->donateamount = $financial['donate-amount'];

    //print_R($_SESSION['user']); die();
    redirect(site_url('?page=profile#Profilepage'));
} else {
    $_SESSION['msg'] = "Wrong Username or Password";
    redirect(site_url());
}
//echo '<pre>';print_R($v);
die;
