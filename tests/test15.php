<?php

$toto = function ()
{
    for ($i = 0; $i < 12344; ++$i) {
        yield $i;
    }
};

var_dump($toto());

/**
 * A. null
 * B. error
 * C. Object(Generator) ....
 * D. Object(Closure) ....
 */