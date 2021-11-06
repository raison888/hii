<?php
require_once __DIR__ . '/vendor/autoload.php';

use testns\eth\Client;
use testns\eth\Utils;

$url = 'http://192.168.1.1:8545' ;

$client = new Client($url);

// net_version
echo 'net_version: ' . $client->net_version() . PHP_EOL;
// eth_getBlockByNumber
var_dump($client->eth_getBlockByNumber(Utils::decToHex(2), false));
