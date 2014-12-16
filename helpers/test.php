<?php
$action = $argv[1];
$bsid = $argv[2];
if($action == 'login') {
    $res = BizSsoController::getLoginByBsid($bsid);
} else {
    $res = BizSsoController::logoutByBsid($bsid);
}
var_dump($res);
