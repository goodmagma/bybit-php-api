<?php
use ByBit\SDK\ByBitApi;
use ByBit\SDK\Enums\AccountType;

include '../vendor/autoload.php';

include 'key_secret.php';

//create private API
$bybitApi = new ByBitApi($api_key, $api_secret, $sandbox);

// Get Wallet Balance
// https://bybit-exchange.github.io/docs/v5/account/wallet-balance
$params = ['accountType' => AccountType::UNIFIED];
$wallet = $bybitApi->accountApi()->getWalletBalance($params);
var_dump($wallet);
