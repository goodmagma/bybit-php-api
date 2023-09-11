<?php

namespace ByBit\SDK\Api;

use ByBit\SDK\ApiRequest;

/**
 * Spot Leverage Token Api
 * 
 * @see https://bybit-exchange.github.io/docs/v5/lt/leverage-token-info
 */
class SpotLeverageTokenApi extends ApiRequest {
    

    /**
     * Get Leverage Token Info
     * @see https://bybit-exchange.github.io/docs/v5/lt/leverage-token-info
     *
     * @param $params array
     * @return array
     */
    public function getLeverageTokenInfo($params) {
        $response = $this->call(ApiRequest::METHOD_GET, ' /v5/spot-lever-token/info', $params);
        return $response->getApiData();
    }

    
    /**
     * Get Leveraged Token Market
     * @see https://bybit-exchange.github.io/docs/v5/lt/leverage-token-reference
     *
     * @param $params array
     * @return array
     */
    public function getLeveragedTokenMarket($params) {
        $response = $this->call(ApiRequest::METHOD_GET, ' /v5/spot-lever-token/reference', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Purchase
     * @see https://bybit-exchange.github.io/docs/v5/lt/purchase
     *
     * @param $params array
     * @return array
     */
    public function purchase($params) {
        $response = $this->call(ApiRequest::METHOD_POST, ' /v5/spot-lever-token/purchase', $params);
        return $response->getApiData();
    }
    

    /**
     * Redeem
     * @see https://bybit-exchange.github.io/docs/v5/lt/redeem
     *
     * @param $params array
     * @return array
     */
    public function redeem($params) {
        $response = $this->call(ApiRequest::METHOD_POST, ' /v5/spot-lever-token/redeem', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Get Purchase/Redemption Records
     * @see https://bybit-exchange.github.io/docs/v5/lt/order-record
     *
     * @param $params array
     * @return array
     */
    public function getPurchaseRedemptionRecords($params) {
        $response = $this->call(ApiRequest::METHOD_GET, ' /v5/spot-lever-token/order-record', $params);
        return $response->getApiData();
    }

}