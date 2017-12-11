<?php

class A {
    
}

class B {
    
}

$a = new A;
$b = new B;
$a->b = $b;
$b->a = $a;

var_dump($a);
print_r($a);
var_export($a);