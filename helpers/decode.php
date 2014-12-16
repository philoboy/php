<?php
$string = $argv[1];
$biztoken = new BizTokenModel();
$source = '';
$token = BizTokenController::decodeApiLoginToken($string,$biztoken, $source);
echo $biztoken->id.$source;
