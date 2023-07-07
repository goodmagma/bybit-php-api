<?php

namespace ByBit\SDK\Api;

use ByBit\SDK\ApiRequest;

/**
 * Class UserApi
 * 
 * @see https://bybit-exchange.github.io/docs/v5/user/create-subuid
 */
class UserApi extends ApiRequest {
    
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