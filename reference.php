<?php

function hello(&$name) {
	$name = 'Hello ' . $name;
}

$name = 'World';

hello($name);

echo $name;
