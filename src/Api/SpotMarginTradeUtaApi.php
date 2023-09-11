<?php

namespace ByBit\SDK\Api;

use ByBit\SDK\ApiRequest;

/**
 * Class SpotMarginTradeUtaApi
 * 
 * @see https://bybit-exchange.github.io/docs/v5/spot-margin-uta/vip-margin
 */
class SpotMarginTradeUtaApi extends ApiRequest {

    /**
     * Get VIP Margin Data
     * @see https://bybit-exchange.github.io/docs/v5/spot-margin-uta/vip-margin
     *
     * @param $params array
     * @return array
     */
    public function getVIPMarginData($params) {
        $response = $this->call(ApiRequest::METHOD_GET, ' /v5/spot-margin-trade/data', $params);
        return $response->getApiData();
    }


    /**
     * Toggle Margin Trade
     * @see https://bybit-exchange.github.io/docs/v5/spot-margin-uta/switch-mode
     *
     * @param $params array
     * @return array
     */
    public function toggleMarginTrade($params) {
        $response = $this->call(ApiRequest::METHOD_POST, ' /v5/spot-margin-trade/switch-mode', $params);
        return $response->getApiData();
    }


    /**
     * Set Leverage
     * @see https://bybit-exchange.github.io/docs/v5/spot-margin-uta/set-leverage
     *
     * @param $params array
     * @return array
     */
    public function setLeverage($params) {
        $response = $this->call(ApiRequest::METHOD_POST, ' /v5/spot-margin-trade/set-leverage', $params);
        return $response->getApiData();
    }


    /**
     * Get Status And Leverage
     * @see https://bybit-exchange.github.io/docs/v5/spot-margin-uta/status
     *
     * @param $params array
     * @return array
     */
    public function getStatusAndLeverage($params) {
        $response = $this->call(ApiRequest::METHOD_GET, ' /v5/spot-margin-trade/state', $params);
        return $response->getApiData();
    }

}