<?php

namespace ByBit\SDK\Api;

use ByBit\SDK\ApiRequest;

/**
 * User Api
 * 
 * @see https://bybit-exchange.github.io/docs/v5/user/create-subuid
 */
class UserApi extends ApiRequest {

    /**
     * Create Sub UID
     * @see https://bybit-exchange.github.io/docs/v5/user/create-subuid
     *
     * @param $params array
     * @return array
     */
    public function createSubUID($params) {
        $response = $this->call(ApiRequest::METHOD_POST, '/v5/user/create-sub-member', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Get API Key Information
     * @see https://bybit-exchange.github.io/docs/v5/user/apikey-info
     * 
     * @param $params array
     * @return array
     */
    public function getAPIKeyInformation($params) {
        $response = $this->call(ApiRequest::METHOD_GET, '/v5/user/query-api', $params);
        return $response->getApiData();
    }

}