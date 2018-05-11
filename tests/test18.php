<?php
error_reporting(E_ALL);

$foo = new stdClass();

$foo->{null} = 'bar';

var_dump($foo->{''});