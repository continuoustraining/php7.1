<?php

require_once "vendor/autoload.php";

$instance = new \Sofrecom\Training\Printable();

$reflection = new ReflectionObject($instance);
$method = $reflection->getMethod('__toString');
$method->setAccessible(true);

echo $instance;