<?php
$start = microtime(true);
echo "microtime param true:\t".microtime(true)."\n";
///echo "microtime param false:\t".microtime(false)."\n";
sleep(3);
$end = microtime(true);
echo "microtime param true:\t".microtime(true)."\n";
echo "The diff of two:\t".($end - $start)."\n";
