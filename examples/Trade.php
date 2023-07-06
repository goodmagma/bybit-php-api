<?php
use ByBit\SDK\ByBitApi;

include '../vendor/autoload.php';

include 'key_secret.php';

//create private API
$bybitApi = new ByBitApi($api_key, $api_secret, $sandbox);

// Place Order
// https://bybit-exchange.github.io/docs/v5/order/create-order
$orderLinkId = uniqid();
$params = ["category" => "linear", "symbol" => "BTCUSDT", "side" => "Buy", "positionIdx" => 0, "orderType" => "Limit", "qty" => "0.001", "price" => "10000", "timeInForce" => "GTC", "orderLinkId" => $orderLinkId];
$order = $bybitApi->tradeApi()->placeOrder($params);
var_dump($order);

readline('Press enter to continue');

// Get Open Orders
// https://bybit-exchange.github.io/docs/v5/order/open-order
$params = ['category' => 'linear', 'symbol' => 'BTCUSDT'];
$orders = $bybitApi->tradeApi()->getOpenOrders($params);
var_dump($orders);

readline('Press enter to continue');

// Amend Order
// https://bybit-exchange.github.io/docs/v5/order/amend-order
$params = ['category' => 'linear', 'symbol' => 'BTCUSDT', "orderLinkId" => $orderLinkId, "takeProfit" => "11000", "stopLoss" => "9000", "tpTriggerBy" => "LastPrice", "slTriggerBy" => "LastPrice"];
$orders = $bybitApi->tradeApi()->amendOrder($params);
var_dump($orders);

readline('Press enter to continue');

// Cancel Order
// https://bybit-exchange.github.io/docs/v5/order/cancel-order
$params = ['category' => 'linear', 'symbol' => 'BTCUSDT', "orderLinkId" => $orderLinkId];
$order = $bybitApi->tradeApi()->cancelOrder($params);
var_dump($order);
