<?php
$max = 1000000;
$num = 1000000;
$res = 1;
for($i=0; $i < 60; $i++) {
    $res = (float)($res * $num) / $max;
    $num--;
}
echo 1-$res;
