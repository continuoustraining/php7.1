<?php

trait MyTrait {
    protected $foo;
    
    public function getFoo(): ?string {
        return $this->foo;
    }
    
    public function setFoo(string $foo) {
        $this->foo = $foo;
        
        return $this;
    }
    
    public function __construct($test)
    {
        var_dump($test);
    }

    /**
     * @return mixed
     */
    public function getBar(): ?string
    {
        return $this->bar;
    }
}

trait MySecondTrait {
    protected $bar;

    /**
     * @return mixed
     */
    public function getBar(): ?string
    {
        return $this->bar;
    }

    /**
     * @param mixed $bar
     * @return MySecondTrait
     */
    public function setBar(string $bar)
    {
        $this->bar = $bar;
        return $this;
    }
}

class FooBar {
    use MyTrait, MySecondTrait {
        MyTrait::getFoo as getFooTrait;
        MySecondTrait::getBar insteadof MyTrait;
    }
    
    public function setBar(string $bar)
    {
        $this->bar = strtoupper($bar);
    }
}

$value = new FooBar('test');

var_dump(get_class_methods($value));

var_export($value instanceof My);