<?php

function hello() 
{
    for ($i = 0; $i < 12344; ++$i) {
        yield $i;
    }
}

var_dump(hello());

/**
 * A. null
 * B. error
 * C. Object(Generator) ....
 */