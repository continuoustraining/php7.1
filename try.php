<?php

class Exception1 extends Exception {
    public function test(Exception2 $e) {
        
    }
}

class Exception2 extends Exception {
    
}

try {
    if (rand(1, 3) > 2) {
        $exception = new Exception1('my first exception');
        $exception->test();
        throw $exception;
    } else {
        throw new Exception2('my second exception');
    }
} catch (\Throwable $e) {
    echo $e;
    echo 'continue script';
    throw new Exception('An exception occured', 500, $e);
} finally {
    echo PHP_EOL . 'Hello World!' . PHP_EOL;
}
