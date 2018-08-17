<?php

class foo {
	function __invoke() {
		echo 'bar';
	}
}

class bar {
	function invoke() {
		echo 'foo';
	}
}

$foo = new foo();

$bar = new bar();

$foo();
// $bar(); Fatal Error
$barCallable = [$bar, 'invoke'];
$barCallable();
