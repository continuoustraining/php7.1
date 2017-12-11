<?php
/**
 * Created by PhpStorm.
 * User: fred
 * Date: 07/12/2017
 * Time: 10:23
 */

namespace Sofrecom\Training;


class Printable
{
    public function __toString()
    {
        return self::class;
    }
}