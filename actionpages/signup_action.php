<?php

$_POST = array_map("trim", $_POST);
$_POST = array_map("removedate", $_POST);
unset($_POST['action']);
$errmsg = '';
$err = 0;
if (isset($_POST['cat']) && strlen(trim($_POST['cat'])) == 0) {
    $err++;
    $errmsg.= 'Please Enter Category<hr>';
} if (isset($_POST['Usertype']) && strlen(trim($_POST['Usertype'])) == 0) {
    $err++;
    $errmsg.= 'Please Enter Valid User Type<hr>';
}if (isset($_POST['fname']) && strlen(trim($_POST['fname'])) == 0) {
    $err++;
    $errmsg.= 'Please Enter Your Name<hr>';
}
if (isset($_POST['em']) && strlen(trim($_POST['em'])) == 0 && !filter_var(trim($_POST['em']), FILTER_VALIDATE_EMAIL)) {
    $err++;
    $errmsg.= 'Please Enter Your Valid Email ID<hr>';
}
if (isset($_POST['pas']) && strlen(trim($_POST['pas'])) == 0) {
    $err++;
    $errmsg.= 'Please Enter Valid PassWord<hr>';
}
$condition = '';

$condition.=" emailId='" . $_POST['em'] . "'";
$v = selectq('bp_users', 'ID', $condition, $con);
if (count($v) > 0) {
    $err++;
    $errmsg.= 'This Email ID Already Used<hr>';
}
if ($err > 0) {
    $_SESSION['msg'] = $errmsg;
    redirect(site_url());
    die;
} else {
//echo $err;
#die;
    if (isset($_POST['register']) && $_POST['register'] == 'SIGN UP') {
        $data['Category'] = ($_POST['cat']);
        $data['utype'] = trim($_POST['Usertype']);
        $data['fname'] = trim($_POST['fname']);
        $data['lname'] = trim($_POST['lname']);
        $data['location'] = trim($_POST['location']);
        $data['emailId'] = trim($_POST['em']);
        $data['pass'] = md5($_POST['pas']);
        $data['usercreateDate'] = DATES;
        $data['status'] = 1;
        inserup('bp_users', $data, '0', $con);
        /* ----------------------mAIL-------------------- */
$ty='';                                         // Set email format to HTML
switch($_POST['Usertype'])
{
    case '2':
        $ty='Consultant';
        break;
    case '3':
        $ty='Advice Seekers';
         break;
    case '4':
        $ty='Charity User';
         break;

}
         $Subject = 'Welcome to buffpod!';
         $Body = file_get_contents('emailtemplate/register.html');
         
         
         $Body=str_replace('%type%', $ty, $Body);
         $Body=str_replace('%name%', $data['fname'], $Body);
         $Body=str_replace('%email%', $_POST['em'], $Body);
         $Body=str_replace('%pass%', $_POST['pas'], $Body);
         $Body=str_replace('%site%', 'buffpod', $Body);
         $Body=str_replace('%logo%', site_url('images/logo.png'), $Body);
         $Body=str_replace('%url%', site_url(), $Body);
        
        $obj->mailing($data['emailId'],MAILADMIN,$Subject,$Body); 
        $Subject.='One New User Register';
        $obj->mailing(MAILADMIN,MAILADMIN,$Subject,$Body); 
        /* ----------------------MAIL-------------------- */

        $_SESSION['msg'] = "“User Registration Successful";
       // die;
      redirect(site_url('?page=login_action'));
    //   redirect(site_url('?page=login_action&em='.$data['emailId'].' &pas='.$_POST['pas']));
       
        
      //  redirect(site_url('index.php'));
    }
}
