<?php
use ByBit\SDK\ByBitApi;

include '../vendor/autoload.php';

include 'key_secret.php';

//create private API
$bybitApi = new ByBitApi($api_key, $api_secret, $api_url);

// Get Wallet Balance
// https://bybit-exchange.github.io/docs/v5/account/wallet-balance
$params = ['accountType' => 'UNIFIED'];
$positions = $bybitApi->accountApi()->getWalletBalance($params);
var_dump($positions);
