<?php

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

echo $obj->foo($test);