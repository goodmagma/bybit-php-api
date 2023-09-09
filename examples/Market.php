<?php
include '../vendor/autoload.php';

use ByBit\SDK\ByBitApi;

include 'key_secret.php';

//create public API (no auth required)
$bybitApi = new ByBitApi('', '', $sandbox);

// Get Kline
// https://bybit-exchange.github.io/docs/v5/market/kline
$params = ['category' => 'spot', 'symbol' => 'BTCUSDT', 'interval' => '1'];
$klines = $bybitApi->marketApi()->getKline($params);
var_dump($klines);


// Get Instruments Info
// https://bybit-exchange.github.io/docs/v5/market/instrument
$params = ['category' => 'spot', 'status' => 'Trading'];
$instrumentsInfo = $bybitApi->marketApi()->getInstrumentsInfo($params);
var_dump($instrumentsInfo);
