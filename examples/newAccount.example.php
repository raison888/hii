<?php
require_once __DIR__ . '/vendor/autoload.php';

use testns\eth\Client;
use testns\eth\Utils;

$url = 'http://192.168.1.1:8545' ;
$client = new Client($url);

// You can to create an address offline
list($address, $privateKey) = $client->newAccount();

var_dump($address, $privateKey);
