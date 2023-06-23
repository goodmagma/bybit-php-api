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
}