<?php

$a = 5;

switch (true) {
    case ($a >5):
        echo 'foo';
        break;
    case ($a <=5):
        echo 'bar';
    case ($a == 5):
        echo 'toto';
        break;
}