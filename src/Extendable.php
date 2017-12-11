<?php
/**
 * Created by PhpStorm.
 * User: fred
 * Date: 07/12/2017
 * Time: 10:44
 */

namespace Sofrecom\Training;

interface MyInterface {
    public function myFunction();
}

interface MySecondInterface {
    public function myFunction(string $test);
}



class Implemented implements MyInterface, MySecondInterface {
    const VERSION = '2.0';
    
    public function myFunction(string $test=null)
    {
    }
}


class Extendable
{
    public function test(MyInterface $instance) {
        
    }
}

class Extended extends Extendable {
    public function test(MyInterface $instance=null) {
        
    }
}