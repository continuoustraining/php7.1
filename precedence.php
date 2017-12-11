<?php

function test1($value) {
    echo "A";
    return $value;
}

function test2($value) {
    echo "B";
    return $value;
}

function test3($value) {
    echo "C";
    return $value;
}

if (true || test1(false) || test2(true) or test3(true)) {
    echo " PHP";
}