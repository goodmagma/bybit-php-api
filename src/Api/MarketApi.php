<?php

namespace ByBit\SDK\Api;

use ByBit\SDK\ApiRequest;

/**
 * Class MarketApi
 * 
 * @see https://bybit-exchange.github.io/docs/v5/market/kline
 */
class MarketApi extends ApiRequest {
    
    /**
     * Get Kline
     * @see https://bybit-exchange.github.io/docs/v5/market/kline
     * 
     * @param $params array
     * @return array
     */
    public function getKline($params) {
        $response = $this->call(ApiRequest::METHOD_GET, '/v5/market/kline', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Get Kline
     * @see https://bybit-exchange.github.io/docs/v5/market/kline
     *
     * @param $params array
     * @return array
     */
    public function getInstrumentsInfo($params) {
        $response = $this->call(ApiRequest::METHOD_GET, '/v5/market/instruments-info', $params);
        return $response->getApiData();
    }
}