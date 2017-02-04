<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//$obj->arra($_SERVER['REQUEST_URI']);
if (isset($_POST['action']) && $_POST['action'] == 'feebacks') {
    $data = array('user_ID' => $_POST['ID'], 'comment' => $_POST['feedback']);

    $Subject = 'New Feed back';

    $seekerBody = file_get_contents('emailtemplate/feedback.html');
    /* ---------------------Seeker End----------------- */
    $conssss='';
    switch($_SESSION['user']->utype)
    {
        case '2':
            $conssss='Consultant';
            break;
        case '3':
            $conssss='Advice Seeker';
            break;
    }
    $names=$obj->uname($_POST['ID']).'('.$conssss.')';
    $seekerBody = str_replace('%site%', 'buffpod', $seekerBody);
    $seekerBody = str_replace('%Name%', $names, $seekerBody);
    $seekerBody = str_replace('%comment%', $_POST['feedback'], $seekerBody);
    //$seekerBody = str_replace('%time%', $obj->timeselect($bookdata1[0]->bookdatas->booking_time, true), $seekerBody);
    $seekerBody = str_replace('%logo%', site_url('images/logo.png'), $seekerBody);
    $seekerBody = str_replace('%url%', site_url(), $seekerBody);
    /* ---------------------Seeker End----------------- */
   #echo $seekerBody;
    $obj->mailing(MAILADMIN, MAILADMIN, $Subject, $seekerBody);
    #die;
    $obj->inserup('bp_feedback', $data);
    $_SESSION['msg'] = "Thank you for your feedback.";
    $obj->redirect($_SESSION['sses_url']);
}