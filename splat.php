<?php

function hello($a, ...$b) {
	echo $a . PHP_EOL;
	var_dump($b);
}

function hello2($a) {
	echo $a . PHP_EOL;
	$args = func_get_args();
	var_dump(array_slice($args, 1, count($args) -1));
}

hello2('A', 'B', 'C');
