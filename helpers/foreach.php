<?php
$maillist = array(1,2,3);
$mailto = array(1,5);
foreach($mailto as &$mail) {
    if (!in_array($mail,$maillist)) {
        $mail = null;
        unset($mail);
    }
}

var_dump($mailto);
