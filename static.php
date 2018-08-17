<?php

class A {
    public static $toto;
    
    public static function foo() {
        return static::class;
    }
    public function __toString()
    {
        return static::foo();
    }
}

class B extends A {
    
}

$instance = new B;

echo $instance . PHP_EOL;

$instance = new A;

echo $instance . PHP_EOL;
