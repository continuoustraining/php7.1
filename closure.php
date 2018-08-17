<?php

$prefix = 'Hello ';

$print = function ($name) use ($prefix) {
	echo $prefix . $name;
};

function execute(callable $callback, $value) {
	$callback($value);
}

execute($print, 'World');
//$print('World');

function test($value) {
	echo $value;
}

execute('test', 'crash');
