<?php
include '../vendor/autoload.php';
include 'key_secret.php';

use ByBit\SDK\ByBitApi;
use ByBit\SDK\Enums\Category;
use ByBit\SDK\Enums\TimeInForce;
use ByBit\SDK\Enums\TriggerBy;
use ByBit\SDK\Enums\PositionIdx;
use ByBit\SDK\Enums\Side;
use ByBit\SDK\Enums\OrderType;

//create private API
$bybitApi = new ByBitApi($api_key, $api_secret, $sandbox);

// Place Order
$orderLinkId = uniqid();
$params = ["category" => Category::LINEAR, "symbol" => "BTCUSDT", "side" => Side::BUY, "positionIdx" => PositionIdx::ONE_WAY_MODE, "orderType" => OrderType::LIMIT, "qty" => "0.001", "price" => "10000", "timeInForce" => TimeInForce::GTC, "orderLinkId" => $orderLinkId];
$order = $bybitApi->tradeApi()->placeOrder($params);
var_dump($order);

readline('Press enter to continue');

// Get Open Orders
$params = ['category' => Category::LINEAR, 'symbol' => 'BTCUSDT'];
$orders = $bybitApi->tradeApi()->getOpenOrders($params);
var_dump($orders);

readline('Press enter to continue');

// Amend Order
$params = ['category' => Category::LINEAR, 'symbol' => 'BTCUSDT', "orderLinkId" => $orderLinkId, "takeProfit" => "11000", "stopLoss" => "9000", "tpTriggerBy" => TriggerBy::LASTPRICE, "slTriggerBy" => TriggerBy::LASTPRICE];
$orders = $bybitApi->tradeApi()->amendOrder($params);
var_dump($orders);

readline('Press enter to continue');

// Cancel Order
$params = ['category' => Category::LINEAR, 'symbol' => 'BTCUSDT', "orderLinkId" => $orderLinkId];
$order = $bybitApi->tradeApi()->cancelOrder($params);
var_dump($order);
