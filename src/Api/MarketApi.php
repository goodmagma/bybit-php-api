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
     * Get Mark Price Kline
     * @see https://bybit-exchange.github.io/docs/v5/market/mark-kline
     *
     * @param $params array
     * @return array
     */
    public function getMarkPriceKline($params) {
        $response = $this->call(ApiRequest::METHOD_GET, '/v5/market/mark-price-kline', $params);
        return $response->getApiData();
    }
    

    /**
     * Get Index Price Kline
     * @see https://bybit-exchange.github.io/docs/v5/market/index-kline
     *
     * @param $params array
     * @return array
     */
    public function getIndexPriceKline($params) {
        $response = $this->call(ApiRequest::METHOD_GET, '/v5/market/index-price-kline', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Get Premium Index Price Kline
     * @see https://bybit-exchange.github.io/docs/v5/market/preimum-index-kline
     *
     * @param $params array
     * @return array
     */
    public function getPremiumIndexPriceKline($params) {
        $response = $this->call(ApiRequest::METHOD_GET, '/v5/market/premium-index-price-kline', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Get Instruments Info
     * @see https://bybit-exchange.github.io/docs/v5/market/instrument
     *
     * @param $params array
     * @return array
     */
    public function getInstrumentsInfo($params) {
        $response = $this->call(ApiRequest::METHOD_GET, '/v5/market/instruments-info', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Get Orderbook
     * @see https://bybit-exchange.github.io/docs/v5/market/orderbook
     *
     * @param $params array
     * @return array
     */
    public function getOrderbook($params) {
        $response = $this->call(ApiRequest::METHOD_GET, '/v5/market/orderbook', $params);
        return $response->getApiData();
    }
    

    /**
     * Get Tickers
     * @see https://bybit-exchange.github.io/docs/v5/market/tickers
     *
     * @param $params array
     * @return array
     */
    public function getTickers($params) {
        $response = $this->call(ApiRequest::METHOD_GET, '/v5/market/tickers', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Get Funding Rate History
     * @see https://bybit-exchange.github.io/docs/v5/market/history-fund-rate
     *
     * @param $params array
     * @return array
     */
    public function getFundingRateHistory($params) {
        $response = $this->call(ApiRequest::METHOD_GET, '/v5/market/funding/history', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Get Public Trading History
     * @see https://bybit-exchange.github.io/docs/v5/market/recent-trade
     *
     * @param $params array
     * @return array
     */
    public function getPublicTradingHistory($params) {
        $response = $this->call(ApiRequest::METHOD_GET, '/v5/market/recent-trade', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Get Open Interest
     * @see https://bybit-exchange.github.io/docs/v5/market/open-interest
     *
     * @param $params array
     * @return array
     */
    public function getOpenInterest($params) {
        $response = $this->call(ApiRequest::METHOD_GET, '/v5/market/open-interest', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Get Historical Volatility
     * @see https://bybit-exchange.github.io/docs/v5/market/iv
     *
     * @param $params array
     * @return array
     */
    public function getHistoricalVolatility($params) {
        $response = $this->call(ApiRequest::METHOD_GET, '/v5/market/historical-volatility', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Get Insurance
     * @see https://bybit-exchange.github.io/docs/v5/market/insurance
     *
     * @param $params array
     * @return array
     */
    public function getInsurance($params) {
        $response = $this->call(ApiRequest::METHOD_GET, '/v5/market/insurance', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Get Risk Limit
     * @see https://bybit-exchange.github.io/docs/v5/market/risk-limit
     *
     * @param $params array
     * @return array
     */
    public function getRiskLimit($params) {
        $response = $this->call(ApiRequest::METHOD_GET, '/v5/market/risk-limit', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Get Delivery Price
     * @see https://bybit-exchange.github.io/docs/v5/market/delivery-price
     *
     * @param $params array
     * @return array
     */
    public function getDeliveryPrice($params) {
        $response = $this->call(ApiRequest::METHOD_GET, '/v5/market/delivery-price', $params);
        return $response->getApiData();
    }
}