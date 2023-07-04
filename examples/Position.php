<?php
use ByBit\SDK\ByBitApi;

include '../vendor/autoload.php';

include 'key_secret.php';

//create private API
$bybitApi = new ByBitApi($api_key, $api_secret, $api_url);

// Get Position Info
// https://bybit-exchange.github.io/docs/v5/position
$params = ["category" => "linear", "symbol" => "DENTUSDT"];
$positions = $bybitApi->positionApi()->getPositionInfo($params);
var_dump($positions);

/*

// Set Leverage
// https://bybit-exchange.github.io/docs/v5/position/leverage
$params = ["category" => "linear", "symbol" => "BTCUSDT", "buyLeverage" => "6", "sellLeverage" => "6"];
$positions = $bybitApi->positionApi()->setLeverage($params);
var_dump($positions);

*/