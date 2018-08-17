<?php

$a = [1, 2, 3, 4];
$a = [1, 2, 3];

$b = ['a' => 1, 'b' => 2, 'c' => 3];
$b = ['a' => 1, 'b' => 5, 'c' => 3];

if ($a>$b) {
    echo 'foo';
} elseif ($b>$a) {
    echo 'bar';
} else {
    echo 'PHP';
}
