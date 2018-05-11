<?php

error_reporting(E_ALL);

$a = new ArrayObject(['foo' => 'bar']);
$b = new ArrayObject(['bar' => 'foo']);

echo $b->{$a->foo};