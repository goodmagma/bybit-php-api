<?php

namespace ByBit\SDK\Api;

use ByBit\SDK\ApiRequest;

/**
 * Class AccountApi
 * 
 * @see https://bybit-exchange.github.io/docs/v5/account/wallet-balance
 */
class AccountApi extends ApiRequest {
    
    /**
     * Get Wallet Balance
     * @see https://bybit-exchange.github.io/docs/v5/account/wallet-balance
     * 
     * @param $params array
     * @return array
     */
    public function getWalletBalance($params) {
        $response = $this->call(ApiRequest::METHOD_GET, '/v5/account/wallet-balance', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Upgrade to Unified Account
     * @see https://bybit-exchange.github.io/docs/v5/account/upgrade-unified-account
     *
     * @param $params array
     * @return array
     */
    public function upgradeToUnifiedAccount($params) {
        $response = $this->call(ApiRequest::METHOD_POST, '/v5/account/upgrade-to-uta', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Get Borrow History
     * @see https://bybit-exchange.github.io/docs/v5/account/borrow-history
     *
     * @param $params array
     * @return array
     */
    public function getBorrowHistory($params) {
        $response = $this->call(ApiRequest::METHOD_GET, '/v5/account/borrow-history', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Get Collateral Info
     * @see https://bybit-exchange.github.io/docs/v5/account/collateral-info
     *
     * @param $params array
     * @return array
     */
    public function getCollateralInfo($params) {
        $response = $this->call(ApiRequest::METHOD_GET, '/v5/account/collateral-info', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Get Coin Greeks
     * @see https://bybit-exchange.github.io/docs/v5/account/coin-greeks
     *
     * @param $params array
     * @return array
     */
    public function getCoinGreeks($params) {
        $response = $this->call(ApiRequest::METHOD_GET, '/v5/asset/coin-greeks', $params);
        return $response->getApiData();
    }

    
    /**
     * Get Fee Rate
     * @see https://bybit-exchange.github.io/docs/v5/account/fee-rate
     *
     * @param $params array
     * @return array
     */
    public function getFeeRate($params) {
        $response = $this->call(ApiRequest::METHOD_GET, '/v5/account/fee-rate', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Get Account Info
     * @see https://bybit-exchange.github.io/docs/v5/account/account-info
     *
     * @param $params array
     * @return array
     */
    public function getAccountInfo($params) {
        $response = $this->call(ApiRequest::METHOD_GET, '/v5/account/info', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Get Transaction Log
     * @see https://bybit-exchange.github.io/docs/v5/account/transaction-log
     *
     * @param $params array
     * @return array
     */
    public function getTransactionLog($params) {
        $response = $this->call(ApiRequest::METHOD_GET, '/v5/account/transaction-log', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Set Margin Mode
     * @see https://bybit-exchange.github.io/docs/v5/account/set-margin-mode
     *
     * @param $params array
     * @return array
     */
    public function setMarginMode($params) {
        $response = $this->call(ApiRequest::METHOD_POST, '/v5/account/set-margin-mode', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Set MMP
     * @see https://bybit-exchange.github.io/docs/v5/account/set-mmp
     *
     * @param $params array
     * @return array
     */
    public function setMMP($params) {
        $response = $this->call(ApiRequest::METHOD_POST, '/v5/account/mmp-modify', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Reset MMP
     * @see https://bybit-exchange.github.io/docs/v5/account/reset-mmp
     *
     * @param $params array
     * @return array
     */
    public function resetMMP($params) {
        $response = $this->call(ApiRequest::METHOD_POST, '/v5/account/mmp-reset', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Get MMP State
     * @see https://bybit-exchange.github.io/docs/v5/account/get-mmp-state
     *
     * @param $params array
     * @return array
     */
    public function getMMPState($params) {
        $response = $this->call(ApiRequest::METHOD_GET, '/v5/account/mmp-state', $params);
        return $response->getApiData();
    }

}