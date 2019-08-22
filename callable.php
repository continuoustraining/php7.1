<?php

declare(strict_types=1);

function toto() {
    echo 'toto';
}

$b = 'Bar';
// A.
$mySecondFunction = function (string $string=null) : ?string {
    return $string ? strtoupper($string) : null;
};

$myFunction = function ($a) use ($b, $mySecondFunction) {
    echo $mySecondFunction();
    echo $mySecondFunction($a . ' ' . $b) . PHP_EOL;
};

$myFunction('Foo');

$total = 0;

$myThirdFunction = function (int $value) {
    return $value;
};

var_dump($myThirdFunction('5'));

class A {
    function b($var) {
        return $var;
    }
    static function c($var) {
        
    }
    function __invoke()
    {
        
    }
}

$instance = new A;
// $invokable2 = [$instance, '__invoke'];
// B.
$bCallable = [$instance, 'b'];
// C.
$cCallable = ['A', 'c'];
// D.
$dCallable = $instance;
$instance();
// E.
$eCallable = 'toto';
$eCallable();
