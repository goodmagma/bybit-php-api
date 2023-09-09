<?php

namespace ByBit\SDK\Api;

use ByBit\SDK\ApiRequest;

/**
 * Class AssetApi
 * 
 * @see https://bybit-exchange.github.io/docs/v5/asset/exchange
 */
class AssetApi extends ApiRequest {
    
    /**
     * Get Coin Exchange Records
     * @see https://bybit-exchange.github.io/docs/v5/asset/exchange
     * 
     * @param $params array
     * @return array
     */
    public function getCoinExchangeRecords($params) {
        $response = $this->call(ApiRequest::METHOD_GET, '/v5/asset/exchange/order-record', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Get Delivery Record
     * @see https://bybit-exchange.github.io/docs/v5/asset/delivery
     *
     * @param $params array
     * @return array
     */
    public function getDeliveryRecord($params) {
        $response = $this->call(ApiRequest::METHOD_GET, '/v5/asset/delivery-record', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Get USDC Session Settlement
     * @see https://bybit-exchange.github.io/docs/v5/asset/settlement
     *
     * @param $params array
     * @return array
     */
    public function getUSDCSessionSettlement($params) {
        $response = $this->call(ApiRequest::METHOD_GET, '/v5/asset/settlement-record', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Get Asset Info (Spot)
     * @see https://bybit-exchange.github.io/docs/v5/asset/asset-info
     *
     * @param $params array
     * @return array
     */
    public function getAssetInfo($params) {
        $response = $this->call(ApiRequest::METHOD_GET, '/v5/asset/transfer/query-asset-info', $params);
        return $response->getApiData();
    }
    
    
}