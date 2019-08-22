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

/* Which statement(s) trigger(s) a Fatal Error? */
// A.
$foo();
// B.
$bar();
// C.
$barCallable = [$bar, 'invoke'];
$barCallable();
