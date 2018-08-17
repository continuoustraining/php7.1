<?php

interface Interface1 {
    public function getFoo() : int;
    
    public function setFoo($value);
}

interface Interface2 {
    public function getFoo(string $scope=null);
    
    public function setBar();
}

class Baz implements Interface1, Interface2 {
    public function getFoo(string $scope=null) : int
    {
        return 'foo';
    }

    public function setFoo($value)
    {
        $this->foo = $value;
    }

    public function setBar($value=null)
    {
        $this->bar = $value;
    }
}
