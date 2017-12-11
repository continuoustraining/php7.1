<?php

require_once 'vendor/autoload.php';

/**
 * Class MyServiceClient
 * @method getTime();
 */
class MyServiceClient extends Zend_Soap_Client {
    
}

ini_set('soap.wsdl_cache_enabled', 0);

$client = new MyServiceClient(
    'http://localhost/soap-server.php?wsdl=1',
    [
        'compression' => SOAP_COMPRESSION_ACCEPT
    ]
);
$client->setUri('http://localhost/soap-server.php');

$result = $client->getTime();

var_dump($result);