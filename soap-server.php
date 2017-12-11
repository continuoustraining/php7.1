<?php

require_once 'vendor/autoload.php';

class MyService {
    /**
     * @param integer $time
     * @return string
     */
    public function getTime($time=null)
    {
        if ($time) {
            return date('c', $time);
        } else {
            return date('c');
        }
    }
}

ini_set('soap.wsdl_cache_enabled', 0);

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
    error_log($response, E_NOTICE);
    echo $response;
}