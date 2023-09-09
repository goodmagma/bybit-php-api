<?php

namespace ByBit\SDK\Api;

use ByBit\SDK\ApiRequest;

/**
 * Class TradeApi
 * 
 * @see https://bybit-exchange.github.io/docs/v5/order/create-order
 */
class TradeApi extends ApiRequest {
    
    /**
     * Place Order
     * @see https://bybit-exchange.github.io/docs/v5/order/create-order
     * 
     * @param $params array
     * @return array
     */
    public function placeOrder($params) {
        $response = $this->call(ApiRequest::METHOD_POST, '/v5/order/create', $params);
        return $response->getApiData();
    }

    
    /**
     * Amend Order
     * @see https://bybit-exchange.github.io/docs/v5/order/amend-order
     *
     * @param $params array
     * @return array
     */
    public function amendOrder($params) {
        $response = $this->call(ApiRequest::METHOD_POST, '/v5/order/amend', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Cancel Order
     * @see https://bybit-exchange.github.io/docs/v5/order/cancel-order
     *
     * @param $params array
     * @return array
     */
    public function cancelOrder($params) {
        $response = $this->call(ApiRequest::METHOD_POST, '/v5/order/cancel', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Get Open Orders
     * @see https://bybit-exchange.github.io/docs/v5/order/open-order
     *
     * @param $params array
     * @return array
     */
    public function getOpenOrders($params) {
        $response = $this->call(ApiRequest::METHOD_GET, '/v5/order/realtime', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Cancel All Orders
     * @see https://bybit-exchange.github.io/docs/v5/order/cancel-order
     *
     * @param $params array
     * @return array
     */
    public function cancelAllOrders($params) {
        $response = $this->call(ApiRequest::METHOD_POST, '/v5/order/cancel-all', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Get Order History
     * @see https://bybit-exchange.github.io/docs/v5/order/order-list
     *
     * @param $params array
     * @return array
     */
    public function getOrderHistory($params) {
        $response = $this->call(ApiRequest::METHOD_GET, '/v5/order/history', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Batch Place Order
     * @see https://bybit-exchange.github.io/docs/v5/order/batch-place
     *
     * @param $params array
     * @return array
     */
    public function batchPlaceOrder($params) {
        $response = $this->call(ApiRequest::METHOD_GET, '/v5/order/create-batch', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Batch Amend Order
     * @see https://bybit-exchange.github.io/docs/v5/order/batch-amend
     *
     * @param $params array
     * @return array
     */
    public function batchAmendOrder($params) {
        $response = $this->call(ApiRequest::METHOD_POST, '/v5/order/amend-batch', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Batch Cancel Order
     * @see https://bybit-exchange.github.io/docs/v5/order/batch-cancel
     *
     * @param $params array
     * @return array
     */
    public function batchCancelOrder($params) {
        $response = $this->call(ApiRequest::METHOD_POST, '/v5/order/cancel-batch', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Get Borrow Quota (Spot)
     * @see https://bybit-exchange.github.io/docs/v5/order/spot-borrow-quota
     *
     * @param $params array
     * @return array
     */
    public function getBorrowQuota($params) {
        $response = $this->call(ApiRequest::METHOD_GET, '/v5/order/spot-borrow-check', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Set Disconnect Cancel All
     * @see https://bybit-exchange.github.io/docs/v5/order/dcp
     *
     * @param $params array
     * @return array
     */
    public function setDisconnectCancelAll($params) {
        $response = $this->call(ApiRequest::METHOD_POST, '/v5/order/disconnected-cancel-all', $params);
        return $response->getApiData();
    }
}