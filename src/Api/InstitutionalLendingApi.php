<?php

namespace ByBit\SDK\Api;

use ByBit\SDK\ApiRequest;

/**
 * Institutional Lending Api
 * 
 * @see https://bybit-exchange.github.io/docs/v5/otc/margin-product-info
 */
class InstitutionalLendingApi extends ApiRequest {

    /**
     * Get Product Info
     * @see https://bybit-exchange.github.io/docs/v5/otc/margin-product-info
     *
     * @param $params array
     * @return array
     */
    public function getProductInfo($params) {
        $response = $this->call(ApiRequest::METHOD_GET, '/v5/ins-loan/product-infos', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Get Margin Coin Info
     * @see https://bybit-exchange.github.io/docs/v5/otc/margin-coin-convert-info
     *
     * @param $params array
     * @return array
     */
    public function getMarginCoinInfo($params) {
        $response = $this->call(ApiRequest::METHOD_GET, '/v5/ins-loan/ensure-tokens-convert', $params);
        return $response->getApiData();
    }

    
    /**
     * Get Loan Orders
     * @see https://bybit-exchange.github.io/docs/v5/otc/loan-info
     *
     * @param $params array
     * @return array
     */
    public function getLoanOrders($params) {
        $response = $this->call(ApiRequest::METHOD_GET, '/v5/ins-loan/loan-order', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Get Repay Orders
     * @see https://bybit-exchange.github.io/docs/v5/otc/repay-info
     *
     * @param $params array
     * @return array
     */
    public function getRepayOrders($params) {
        $response = $this->call(ApiRequest::METHOD_GET, '/v5/ins-loan/repaid-history', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Get LTV
     * @see https://bybit-exchange.github.io/docs/v5/otc/ltv-convert
     *
     * @param $params array
     * @return array
     */
    public function getLTV($params) {
        $response = $this->call(ApiRequest::METHOD_GET, '/v5/ins-loan/ltv-convert', $params);
        return $response->getApiData();
    }

}