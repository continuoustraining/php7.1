<?php

$myObject = new class { 
	public function __toString()
	{
		return ($this->hello)() . ($this->world)();
	}
};

$myObject->hello = function () { return "Hello"; };

$myObject->world = function () { return " World!"; };

echo $myObject;
