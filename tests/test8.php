<?php

$num = -1;

$a = (bool) $num;

if ($a>0) {
    echo (int)11 . PHP_EOL;
    echo (int)011 . PHP_EOL;
    echo (int)0x11 . PHP_EOL;
    echo 11+011+0x11;
} elseif ($a<0) {
    echo 'inf';
} else {
    echo 'none';
}