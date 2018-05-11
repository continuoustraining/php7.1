<?php

$xml = simplexml_load_file('./xml/data.xml');

echo get_class($xml) . PHP_EOL;

var_dump($xml->count());

