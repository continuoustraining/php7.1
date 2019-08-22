<?php

chdir(dirname(__DIR__));

var_dump(include './foo/data.php');
var_dump(require './foo/data.php');
var_dump(require './foo/include.php');
