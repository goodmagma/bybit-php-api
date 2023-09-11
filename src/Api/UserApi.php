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
     * Create Sub UID API Key
     * @see https://bybit-exchange.github.io/docs/v5/user/create-subuid-apikey
     *
     * @param $params array
     * @return array
     */
    public function createSubUIDAPIKey($params) {
        $response = $this->call(ApiRequest::METHOD_POST, '/v5/user/create-sub-api', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Get Sub UID List
     * @see https://bybit-exchange.github.io/docs/v5/user/subuid-list
     *
     * @param $params array
     * @return array
     */
    public function getSubUIDList($params) {
        $response = $this->call(ApiRequest::METHOD_GET, '/v5/user/query-sub-members', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Freeze Sub UID
     * @see https://bybit-exchange.github.io/docs/v5/user/froze-subuid
     *
     * @param $params array
     * @return array
     */
    public function freezeSubUID($params) {
        $response = $this->call(ApiRequest::METHOD_POST, '/v5/user/frozen-sub-member', $params);
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

    
    /**
     * Get UID Wallet Type
     * @see https://bybit-exchange.github.io/docs/v5/user/wallet-type
     *
     * @param $params array
     * @return array
     */
    public function getUIDWalletType($params) {
        $response = $this->call(ApiRequest::METHOD_GET, '/v5/user/get-member-type', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Modify Master API Key
     * @see https://bybit-exchange.github.io/docs/v5/user/modify-master-apikey
     *
     * @param $params array
     * @return array
     */
    public function modifyMasterAPIKey($params) {
        $response = $this->call(ApiRequest::METHOD_POST, '/v5/user/update-api', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Modify Sub API Key
     * @see https://bybit-exchange.github.io/docs/v5/user/modify-sub-apikey
     *
     * @param $params array
     * @return array
     */
    public function modifySubAPIKey($params) {
        $response = $this->call(ApiRequest::METHOD_POST, '/v5/user/update-sub-api', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Delete Master API Key
     * @see https://bybit-exchange.github.io/docs/v5/user/rm-master-apikey
     *
     * @param $params array
     * @return array
     */
    public function deleteMasterAPIKey($params) {
        $response = $this->call(ApiRequest::METHOD_POST, '/v5/user/delete-api', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Delete Sub API Key
     * @see https://bybit-exchange.github.io/docs/v5/user/rm-sub-apikey
     *
     * @param $params array
     * @return array
     */
    public function deleteSubAPIKey($params) {
        $response = $this->call(ApiRequest::METHOD_POST, '/v5/user/delete-sub-api', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Get Affiliate User Info
     * @see https://bybit-exchange.github.io/docs/v5/user/affiliate-info
     *
     * @param $params array
     * @return array
     */
    public function getAffiliateUserInfo($params) {
        $response = $this->call(ApiRequest::METHOD_GET, '/v5/user/aff-customer-info', $params);
        return $response->getApiData();
    }

}