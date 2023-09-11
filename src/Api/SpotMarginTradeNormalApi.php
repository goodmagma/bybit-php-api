<?php

namespace ByBit\SDK\Api;

use ByBit\SDK\ApiRequest;

/**
 * Spot Margin Trade (Normal) Api
 * 
 * @see https://bybit-exchange.github.io/docs/v5/spot-margin-normal/vip-margin
 */
class SpotMarginTradeNormalApi extends ApiRequest {

    /**
     * Get VIP Margin Data
     * @see https://bybit-exchange.github.io/docs/v5/spot-margin-normal/vip-margin
     *
     * @param $params array
     * @return array
     */
    public function getVIPMarginData($params) {
        $response = $this->call(ApiRequest::METHOD_GET, ' /v5/spot-cross-margin-trade/data', $params);
        return $response->getApiData();
    }

    
    /**
     * Get Margin Coin Info
     * @see https://bybit-exchange.github.io/docs/v5/spot-margin-normal/margin-data
     *
     * @param $params array
     * @return array
     */
    public function getMarginCoinInfo($params) {
        $response = $this->call(ApiRequest::METHOD_GET, ' /v5/spot-cross-margin-trade/pledge-token', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Get Borrowable Coin Info
     * @see https://bybit-exchange.github.io/docs/v5/spot-margin-normal/borrowable-data
     *
     * @param $params array
     * @return array
     */
    public function getBorrowableCoinInfo($params) {
        $response = $this->call(ApiRequest::METHOD_GET, ' /v5/spot-cross-margin-trade/borrow-token', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Get Interest &amp; Quota
     * @see https://bybit-exchange.github.io/docs/v5/spot-margin-normal/interest-quota
     *
     * @param $params array
     * @return array
     */
    public function getInterestAndQuota($params) {
        $response = $this->call(ApiRequest::METHOD_GET, ' /v5/spot-cross-margin-trade/loan-info', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Get Loan Account Info
     * @see https://bybit-exchange.github.io/docs/v5/spot-margin-normal/account-info
     *
     * @param $params array
     * @return array
     */
    public function getLoanAccountInfo($params) {
        $response = $this->call(ApiRequest::METHOD_GET, ' /v5/spot-cross-margin-trade/account', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Borrow
     * @see https://bybit-exchange.github.io/docs/v5/spot-margin-normal/borrow
     *
     * @param $params array
     * @return array
     */
    public function borrow($params) {
        $response = $this->call(ApiRequest::METHOD_POST, ' /v5/spot-cross-margin-trade/loan', $params);
        return $response->getApiData();
    }
    

    /**
     * Repay
     * @see https://bybit-exchange.github.io/docs/v5/spot-margin-normal/repay
     *
     * @param $params array
     * @return array
     */
    public function repay($params) {
        $response = $this->call(ApiRequest::METHOD_POST, ' /v5/spot-cross-margin-trade/repay', $params);
        return $response->getApiData();
    }


    /**
     * Get Borrow Order Detail
     * @see https://bybit-exchange.github.io/docs/v5/spot-margin-normal/borrow-order
     *
     * @param $params array
     * @return array
     */
    public function getBorrowOrderDetail($params) {
        $response = $this->call(ApiRequest::METHOD_GET, ' /v5/spot-cross-margin-trade/orders', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Get Repayment Order Detail
     * @see https://bybit-exchange.github.io/docs/v5/spot-margin-normal/repay-order
     *
     * @param $params array
     * @return array
     */
    public function getRepaymentOrderDetail($params) {
        $response = $this->call(ApiRequest::METHOD_GET, ' /v5/spot-cross-margin-trade/repay-history', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Toggle Margin Trade
     * @see https://bybit-exchange.github.io/docs/v5/spot-margin-normal/switch-mode
     *
     * @param $params array
     * @return array
     */
    public function toggleMarginTrade($params) {
        $response = $this->call(ApiRequest::METHOD_POST, ' /v5/spot-cross-margin-trade/switch', $params);
        return $response->getApiData();
    }
}