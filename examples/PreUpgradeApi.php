<?php
include '../vendor/autoload.php';
include 'key_secret.php';

use ByBit\SDK\ByBitApi;
use ByBit\SDK\Enums\AccountType;
use ByBit\SDK\Enums\Category;

//create private API
$bybitApi = new ByBitApi($api_key, $api_secret, $sandbox);

// Get Pre-upgrade Order History
$params = ['category' => Category::LINEAR, "symbol" => "BTCUSDT"];
$result = $bybitApi->preUpgradeApi()->getPreUpgradeOrderHistory($params);
var_dump($result);
