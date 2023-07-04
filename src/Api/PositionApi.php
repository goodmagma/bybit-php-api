<?php

namespace ByBit\SDK\Api;

use ByBit\SDK\ApiRequest;

/**
 * Class PositionApi
 * 
 * @see https://bybit-exchange.github.io/docs/v5/position
 */
class PositionApi extends ApiRequest {
    
    /**
     * Get Position Info
     * @see https://bybit-exchange.github.io/docs/v5/position
     * 
     * @param $params array
     * @return array
     */
    public function getPositionInfo($params) {
        $response = $this->call(ApiRequest::METHOD_GET, '/v5/position/list', $params);
        return $response->getApiData();
    }

    
    /**
     * Set Leverage
     * @see https://bybit-exchange.github.io/docs/v5/position/leverage
     *
     * @param $params array
     * @return array
     */
    public function setLeverage($params) {
        $response = $this->call(ApiRequest::METHOD_POST, '/v5/position/set-leverage', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Switch Position Mode
     * @see https://bybit-exchange.github.io/docs/v5/position/position-mode
     *
     * @param $params array
     * @return array
     */
    public function switchPositionMode($params) {
        $response = $this->call(ApiRequest::METHOD_POST, '/v5/position/switch-mode', $params);
        return $response->getApiData();
    }
   
    
    /**
     * Switch Cross/Isolated Margin
     * @see https://bybit-exchange.github.io/docs/v5/position/cross-isolate
     *
     * @param $params array
     * @return array
     */
    public function switchCrossIsolatedMargin($params) {
        $response = $this->call(ApiRequest::METHOD_POST, '/v5/position/switch-isolated', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Switch Cross/Isolated Margin
     * @see https://bybit-exchange.github.io/docs/v5/position/cross-isolate
     *
     * @param $params array
     * @return array
     */
    public function setTradingStop($params) {
        $response = $this->call(ApiRequest::METHOD_POST, '/v5/position/trading-stop', $params);
        return $response->getApiData();
    }
}