<?php

$name = "Héro";

$heredoc = <<<TEST1

toto le "$name" \u{1F601}

TEST1;

echo $heredoc . PHP_EOL;

$nowdoc = <<<'TEST2'

Test "Nowdoc" pour "$name" \u{1F601}

TEST2;

echo $nowdoc . PHP_EOL;
