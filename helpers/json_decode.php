<?php
$json = isset($argv[1])?$argv[1]:'';
if(empty($json)){
	echo "Usage:php json_decode.php 'json_str'\n";
	exit();
}
echo $json."\n";
var_dump(json_decode($json,true));
