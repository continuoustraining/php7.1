<?php
declare(strict_types=1);

error_reporting(E_ALL);

$foo = new stdClass();

$foo->{null} = 'bar';

var_dump($foo->{''});
echo serialize($foo);
