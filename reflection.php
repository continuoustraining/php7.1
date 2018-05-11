<?php

class foo {
    protected $bar;

    /**
     * @return mixed
     */
    public function getBar()
    {
        return $this->bar;
    }
    
}

$foo = new foo();
$reflection = new ReflectionObject($foo);
$property = $reflection->getProperty('bar');
$property->setAccessible(true);
$property->setValue($foo, 'Hello World!');

echo $foo->getBar();