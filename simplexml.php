<?php

$xml = simplexml_load_file('./xml/data.xml');

echo get_class($xml) . PHP_EOL;

var_dump($xml->count());


$test = new class implements Countable {
  public function count()
  {
      return 6;
  }
};

var_dump(count($test));