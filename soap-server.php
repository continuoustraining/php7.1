<?php

require_once 'vendor/autoload.php';

class MyService {
    /**
     * @param integer $time
     * @return string
     */
    public function getTime($time)
    {
        return date('c', $time);
    }
}


if (isset($_GET['wsdl'])) {
    $server = new Zend_Soap_AutoDiscover();
    $server->setClass(MyService::class);
    $server->setUri('http://localhost/soap-server.php');
    $server->handle();
} else {
    $server = new class extends Zend_Soap_Server {
        protected $_returnResponse = true;
    };
    $server->setClass(MyService::class);
    $server->setUri('http://localhost/soap-server.php');
    $response = $server->handle();
    error_log($response);
    echo $response;
}