<?php
include '../vendor/autoload.php';
include 'key_secret.php';

use ByBit\SDK\ByBitApi;
use ByBit\SDK\Enums\Category;

//create private API
$bybitApi = new ByBitApi($api_key, $api_secret, $sandbox);

// Get Position Info
$params = ["category" => Category::LINEAR, "symbol" => "BTCUSDT"];
$positions = $bybitApi->positionApi()->getPositionInfo($params);
var_dump($positions);
