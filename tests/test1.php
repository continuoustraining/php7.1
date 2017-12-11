<?php

function &AddComment($a=null) {
    $html = 'salut';
    $html.= $a;
    $html.= func_get_arg(1);
    return $html;
}

$firstname = 'Foo';
$lastname = 'Bar';

echo AddComment($firstname, $lastname);