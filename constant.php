<?php

define('CONSTANT_1', 'VALUE_1');


echo CONSTANT_1 . PHP_EOL;

class MyClass {
    const CONSTANT_1 = "CLASS_VALUE_1";
    
    static function define() {
        define('CONSTANT_2', 'VALUE_2');
    }
}

echo MyClass::CONSTANT_1 . PHP_EOL;

const CONSTANT_3 = 'CONSTANT_3';

echo CONSTANT_3 . PHP_EOL;

MyClass::define();

echo CONSTANT_2 . PHP_EOL;

var_dump(defined('CONSTANT_2'));