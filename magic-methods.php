<?php

class Magic {
    protected $foo;
    
    protected $say;
    
    public function __construct(callable $say)
    {
        $this->say = $say;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }
    
    public function __get($name)
    {
        return $this->$name;
    }
    
    public function __isset($name)
    {
        return isset($this->$name);
    }
    
    public function __call($name, $arguments)
    {
        return call_user_func_array($this->$name, $arguments);
    }
}

$obj = new Magic(function ($request) { 
    if ($request == 'hello') {
        return 'World!';
    } 
});

$obj->foo = 'bar';

echo $obj->foo . PHP_EOL;

var_dump(isset($obj->foo));

echo $obj->say('hello');
