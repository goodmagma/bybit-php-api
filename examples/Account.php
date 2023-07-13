<?php
use ByBit\SDK\ByBitApi;
use ByBit\SDK\Enums\AccountType;

include '../vendor/autoload.php';

include 'key_secret.php';

//create private API
$bybitApi = new ByBitApi($api_key, $api_secret, $sandbox);

// Get Account Info
$params = [];
$result = $bybitApi->accountApi()->getAccountInfo($params);
var_dump($result);


// Get Wallet Balance
$params = ['accountType' => AccountType::CONTRACT];
$result = $bybitApi->accountApi()->getWalletBalance($params);
var_dump($result);
