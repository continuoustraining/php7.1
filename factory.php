<?php

// anonymous factory

$factory = function ($className) {
	return new $className();
};

$class = $factory('stdClass');
var_dump($class);

// invokable factory

class Factory {
	function __invoke($className) {
		return new $className();
	}
}

$factory = new Factory();

$class = $factory('ArrayObject');
var_dump($class);

// Factory Collection

class FactoryCollection {
	static function factory1($className) {
		return new $className();
	}
	
	function factory2($className) {
		return new $className;
	}
}

$factory = ['FactoryCollection', 'factory1'];

$class = $factory('Factory');
var_dump($class);

$factoryCollection = new FactoryCollection();
$factory = [$factoryCollection, 'factory2'];

$class = $factory('FactoryCollection');
var_dump($class);
