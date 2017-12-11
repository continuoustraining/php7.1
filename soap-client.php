<?php

require_once 'vendor/autoload.php';

/**
 * Class MyServiceClient
 * @method getTime();
 */
class MyServiceClient extends Zend_Soap_Client {
    
}

$client = new MyServiceClient('http://localhost/soap-server.php?wsdl=1');
$client->setUri('http://localhost/soap-server.php');

$result = $client->getTime(10000);

var_dump($result);