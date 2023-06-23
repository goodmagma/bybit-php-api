<?php
use ByBit\SDK\ByBitApi;

include '../vendor/autoload.php';

include 'key_secret.php';

//create private API
$bybitApi = new ByBitApi($api_key, $api_secret, $api_url);

// Place Order
// https://bybit-exchange.github.io/docs/v5/order/create-order
/*
$orderLinkId=uniqid();
$params = ["category" => "linear", "symbol" => "BTCUSDT", "side" => "Buy", "positionIdx" => 0, "orderType" => "Limit", "qty" => "0.001", "price" => "10000", "timeInForce" => "GTC", "orderLinkId" => $orderLinkId];
$order = $bybitApi->tradeApi()->placeOrder($params);
var_dump($order);
*/

// Get Open Orders
// https://bybit-exchange.github.io/docs/v5/order/open-order
$params = ['category' => 'linear', 'symbol' => 'BTCUSDT'];
$orders = $bybitApi->tradeApi()->getOpenOrders($params);
var_dump($orders);

// Cancel Order
// https://bybit-exchange.github.io/docs/v5/order/cancel-order
//$params = ['category' => 'linear', 'symbol' => 'BTCUSDT', 'orderLinkId' => $orderLinkId];
$params = ['category' => 'linear', 'symbol' => 'BTCUSDT', 'orderId' => '22aea1d7-627e-4abb-b58b-03cbea389378', "orderLinkId" => null];
$order = $bybitApi->tradeApi()->cancelOrder($params);
var_dump($order);
