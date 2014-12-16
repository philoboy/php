<?php
$biztokenid = $argv[1];
$biztoken = new BizTokenModel($biztokenid);
$token = BizTokenController::encodeApiLoginToken($biztoken, $lasttime = null, $version = 0, $from = 1);
echo $token;
