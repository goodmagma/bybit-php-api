<?php

namespace ByBit\SDK\Api;

use ByBit\SDK\ApiRequest;

/**
 * Broker Api
 * 
 * @see https://bybit-exchange.github.io/docs/v5/broker/earning
 */
class BrokerApi extends ApiRequest {
    
    /**
     * Get Broker Earning
     * @see https://bybit-exchange.github.io/docs/v5/broker/earning
     *
     * @param $params array
     * @return array
     */
    public function getBrokerEarning($params) {
        $response = $this->call(ApiRequest::METHOD_GET, '/v5/broker/earning-record', $params);
        return $response->getApiData();
    }

}