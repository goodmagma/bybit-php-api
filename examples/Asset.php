<?php
include '../vendor/autoload.php';
include 'key_secret.php';

use ByBit\SDK\ByBitApi;
use ByBit\SDK\Enums\AccountType;

//create private API
$bybitApi = new ByBitApi($api_key, $api_secret, $sandbox);

// Get Coin Exchange Records
$params = [];
$result = $bybitApi->assetApi()->getCoinExchangeRecords($params);
var_dump($result);
