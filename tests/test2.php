<?php

$tab = ['P' => 5, 'A' => 'test', 'Z'];
$tab2 = [5, 5, 2, 1, 2];

$t = array_shift($tab2);
$p = array_combine($tab2, $tab);
array_unshift($p, $t);

var_dump($p);
