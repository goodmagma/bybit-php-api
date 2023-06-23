<?php

namespace ByBit\SDK\Api;

use ByBit\SDK\ApiRequest;

/**
 * Class AccountApi
 * 
 * @see https://bybit-exchange.github.io/docs/v5/account/wallet-balance
 */
class AccountApi extends ApiRequest {
    
    /**
     * Get Wallet Balance
     * @see https://bybit-exchange.github.io/docs/v5/account/wallet-balance
     * 
     * @param $params array
     * @return array
     */
    public function getWalletBalance($params) {
        $response = $this->call(ApiRequest::METHOD_GET, '/v5/account/wallet-balance', $params);
        return $response->getApiData();
    }

}