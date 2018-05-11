<?php

declare(strict_types=1);

class A {
    private $val = 'hello';
    
    function foo($val) {
        $val .= 'M';
        
        return 'A' . $val;
    }
}

class B extends A {
    function foo($test) {
        return 'B' . $test;
    }
}

$obj = new B;
$test = $obj->val;
var_dump($test);
echo $obj->foo($test);
