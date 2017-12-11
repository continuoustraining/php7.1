<?php
function gen_one_to_three() {
    for ($i = 0; $i <= PHP_INT_MAX; $i++) {
        yield $i;
    }
}

$gen = gen_one_to_three();
foreach ($gen as $value) {
    echo "$value";
}

// A) abcABC
// B) AaBbCc
// C) ABCabc
// D) aAbBcC