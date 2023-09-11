<?php

namespace ByBit\SDK\Api;

use ByBit\SDK\ApiRequest;

/**
 * Class PreUpgradeApi
 * 
 * @see https://bybit-exchange.github.io/docs/v5/asset/exchange
 */
class PreUpgradeApi extends ApiRequest {
    

    /**
     * Get Pre-upgrade Order History
     * @see https://bybit-exchange.github.io/docs/v5/pre-upgrade/order-list
     *
     * @param $params array
     * @return array
     */
    public function getPreUpgradeOrderHistory($params) {
        $response = $this->call(ApiRequest::METHOD_GET, ' /v5/pre-upgrade/order/history', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Get Pre-upgrade Trade History
     * @see https://bybit-exchange.github.io/docs/v5/pre-upgrade/execution
     *
     * @param $params array
     * @return array
     */
    public function getPreUpgradeTradeHistory($params) {
        $response = $this->call(ApiRequest::METHOD_GET, ' /v5/pre-upgrade/execution/list', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Get Pre-upgrade Closed PnL
     * @see https://bybit-exchange.github.io/docs/v5/pre-upgrade/close-pnl
     *
     * @param $params array
     * @return array
     */
    public function getPreUpgradeClosedPnL($params) {
        $response = $this->call(ApiRequest::METHOD_GET, ' /v5/pre-upgrade/position/closed-pnl', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Get Pre-upgrade Transaction Log
     * @see https://bybit-exchange.github.io/docs/v5/pre-upgrade/transaction-log
     *
     * @param $params array
     * @return array
     */
    public function getPreUpgradeTransactionLog($params) {
        $response = $this->call(ApiRequest::METHOD_GET, ' /v5/pre-upgrade/account/transaction-log', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Get Pre-upgrade Option Delivery Record
     * @see https://bybit-exchange.github.io/docs/v5/pre-upgrade/delivery
     *
     * @param $params array
     * @return array
     */
    public function getPreUpgradeOptionDeliveryRecord($params) {
        $response = $this->call(ApiRequest::METHOD_GET, ' /v5/pre-upgrade/asset/delivery-record', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Get Pre-upgrade USDC Session Settlement
     * @see https://bybit-exchange.github.io/docs/v5/pre-upgrade/settlement
     *
     * @param $params array
     * @return array
     */
    public function getPreUpgradeUSDCSessionSettlement($params) {
        $response = $this->call(ApiRequest::METHOD_GET, ' /v5/pre-upgrade/asset/settlement-record', $params);
        return $response->getApiData();
    }

}