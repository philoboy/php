<?php
/*
//$mailto = array('linjie_chang@qq.com');
//$mailto = array('linjie_chang@qq.com','changlinjie@meituan.com');
$toMail = 'linjie_chang@qq.com';
//$toMail = 'changlinjie@meituan.com';
$extra = array(
        'from' => 'noreply@meituan.com',
        //'fromName' => '【美团商户】重置密码邮件',
        'fromName' => 'fromName',
        'reply' => 'noreply@meituan.com',
        );
//$mailsubject = '【美团商户】重置密码邮件';
$mailsubject = 'mailsubject';
//$mailbody = $bizacct->name.'您好，您的账号'.$bizacct->login.'，更新密码为'.$new['password'].'。请注意保密，美团工作人员，不会向您索要。';
//$mailbody = '某某商户（商户名）您好，您的账号mtpm（登陆名），更新密码为123456。请注意保密，美团工作人员，不会向您索要。';
$mailbody = 'mailbody';
//$ret = Util::sendMail($mailto, $mailsubject, $mailbody, $extra);
$to = 'mtpm';
$tplid = 1;
$ret = MailQueueController::addEx(0, 0, $to, $toMail, MailQueueModel::TYPE_EMAIL_MIS, $mailbody, null, null, array('tplid' => intval($tplid)));

        //$obj = new MailQueueModel();
$ret = MailQueueController::addEx(0, 0, '', $toMail, MailQueueModel::TYPE_WELCOME, '', null, null, null,false);
var_dump($ret);
*/
$arr = array(
    'bizName' => 'chang',
    'bizLogin' => 'chang',
    'bizPassword' => 'chang',
);
$ret = MailQueueController::parseTemplate(MailQueueController::MAIL_MIS_EDIT_BIZACCT, 1, $arr);
var_dump($ret);
