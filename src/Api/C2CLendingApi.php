<?php

namespace ByBit\SDK\Api;

use ByBit\SDK\ApiRequest;

/**
 * C2C Lending Api
 * 
 * @see https://bybit-exchange.github.io/docs/v5/c2c-lend/coin-info
 */
class C2CLendingApi extends ApiRequest {
    
    /**
     * Get Lending Coin Info
     * @see https://bybit-exchange.github.io/docs/v5/c2c-lend/coin-info
     *
     * @param $params array
     * @return array
     */
    public function getLendingCoinInfo($params) {
        $response = $this->call(ApiRequest::METHOD_GET, '/v5/lending/info', $params);
        return $response->getApiData();
    }

    
    /**
     * Deposit Funds
     * @see https://bybit-exchange.github.io/docs/v5/c2c-lend/deposit
     *
     * @param $params array
     * @return array
     */
    public function depositFunds($params) {
        $response = $this->call(ApiRequest::METHOD_POST, '/v5/lending/purchase', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Redeem Funds
     * @see https://bybit-exchange.github.io/docs/v5/c2c-lend/redeem
     *
     * @param $params array
     * @return array
     */
    public function redeemFunds($params) {
        $response = $this->call(ApiRequest::METHOD_POST, '/v5/lending/redeem', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Get Order Records
     * @see https://bybit-exchange.github.io/docs/v5/c2c-lend/order-record
     *
     * @param $params array
     * @return array
     */
    public function getOrderRecords($params) {
        $response = $this->call(ApiRequest::METHOD_GET, '/v5/lending/history-order', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Get Lending Account Info
     * @see https://bybit-exchange.github.io/docs/v5/c2c-lend/account-info
     *
     * @param $params array
     * @return array
     */
    public function getLendingAccountInfo($params) {
        $response = $this->call(ApiRequest::METHOD_GET, '/v5/lending/account', $params);
        return $response->getApiData();
    }

}