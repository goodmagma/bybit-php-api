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
     * Set TP/SL Mode
     * @see https://bybit-exchange.github.io/docs/v5/position/tpsl-mode
     *
     * @param $params array
     * @return array
     */
    public function setTPSLMode($params) {
        $response = $this->call(ApiRequest::METHOD_POST, '/v5/position/set-tpsl-mode', $params);
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
     * Set Risk Limit
     * @see https://bybit-exchange.github.io/docs/v5/position/set-risk-limit
     *
     * @param $params array
     * @return array
     */
    public function setRiskLimit($params) {
        $response = $this->call(ApiRequest::METHOD_POST, '/v5/position/set-risk-limit', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Set Trading Stop
     * @see https://bybit-exchange.github.io/docs/v5/position/trading-stop
     *
     * @param $params array
     * @return array
     */
    public function setTradingStop($params) {
        $response = $this->call(ApiRequest::METHOD_POST, '/v5/position/trading-stop', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Set Auto Add Margin
     * @see https://bybit-exchange.github.io/docs/v5/position/auto-add-margin
     *
     * @param $params array
     * @return array
     */
    public function setAutoAddMargin($params) {
        $response = $this->call(ApiRequest::METHOD_POST, '/v5/position/set-auto-add-margin', $params);
        return $response->getApiData();
    }
    

    /**
     * Add Or Reduce Margin
     * @see https://bybit-exchange.github.io/docs/v5/position/manual-add-margin
     *
     * @param $params array
     * @return array
     */
    public function addOrReduceMargin($params) {
        $response = $this->call(ApiRequest::METHOD_POST, '/v5/position/add-margin', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Get Execution
     * @see https://bybit-exchange.github.io/docs/v5/position/execution
     *
     * @param $params array
     * @return array
     */
    public function getExecution($params) {
        $response = $this->call(ApiRequest::METHOD_GET, '/v5/execution/list', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Get Closed PnL
     * @see https://bybit-exchange.github.io/docs/v5/position/close-pnl
     *
     * @param $params array
     * @return array
     */
    public function getClosedPnL($params) {
        $response = $this->call(ApiRequest::METHOD_GET, '/v5/position/closed-pnl', $params);
        return $response->getApiData();
    }
}