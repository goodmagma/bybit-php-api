<?php
include '../vendor/autoload.php';
include 'key_secret.php';

use ByBit\SDK\ByBitApi;
use ByBit\SDK\Enums\Category;

//create public API (no auth required)
$bybitApi = new ByBitApi('', '', $sandbox);

// Get Kline
$params = ['category' => Category::SPOT, 'symbol' => 'BTCUSDT', 'interval' => '1'];
$klines = $bybitApi->marketApi()->getKline($params);
var_dump($klines);


// Get Instruments Info
$params = ['category' => Category::SPOT, 'status' => 'Trading'];
$instrumentsInfo = $bybitApi->marketApi()->getInstrumentsInfo($params);
var_dump($instrumentsInfo);
