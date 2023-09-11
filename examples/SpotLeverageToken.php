<?php
include '../vendor/autoload.php';
include 'key_secret.php';

use ByBit\SDK\ByBitApi;
use ByBit\SDK\Enums\AccountType;

//create private API
$bybitApi = new ByBitApi('', '', $sandbox);

// Get Leverage Token Info
$params = ["ltCoin" => "BTC3L"];
$result = $bybitApi->spotLeverageTokenApi()->getLeverageTokenInfo($params);
var_dump($result);

