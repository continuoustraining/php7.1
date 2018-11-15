<?php

$a = ['A', 'B', 'C', 'D', 'C', 'B'];

unset($a[array_search('A', $a)]);

echo implode('.', $a) . PHP_EOL;
echo strpos(implode('.', $a), 'C', -9);
