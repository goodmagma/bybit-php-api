<?php
include '../vendor/autoload.php';
include 'key_secret.php';

use ByBit\SDK\ByBitApi;
use ByBit\SDK\Enums\AccountType;

//create private API
$bybitApi = new ByBitApi($api_key, $api_secret, $sandbox);

// Get API Key Information
$params = [];
$result = $bybitApi->userApi()->getAPIKeyInformation($params);
var_dump($result);
