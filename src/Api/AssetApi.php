<?php

namespace ByBit\SDK\Api;

use ByBit\SDK\ApiRequest;

/**
 * Class AssetApi
 * 
 * @see https://bybit-exchange.github.io/docs/v5/asset/exchange
 */
class AssetApi extends ApiRequest {
    
    /**
     * Get Coin Exchange Records
     * @see https://bybit-exchange.github.io/docs/v5/asset/exchange
     * 
     * @param $params array
     * @return array
     */
    public function getCoinExchangeRecords($params) {
        $response = $this->call(ApiRequest::METHOD_GET, '/v5/asset/exchange/order-record', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Get Delivery Record
     * @see https://bybit-exchange.github.io/docs/v5/asset/delivery
     *
     * @param $params array
     * @return array
     */
    public function getDeliveryRecord($params) {
        $response = $this->call(ApiRequest::METHOD_GET, '/v5/asset/delivery-record', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Get USDC Session Settlement
     * @see https://bybit-exchange.github.io/docs/v5/asset/settlement
     *
     * @param $params array
     * @return array
     */
    public function getUSDCSessionSettlement($params) {
        $response = $this->call(ApiRequest::METHOD_GET, '/v5/asset/settlement-record', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Get Asset Info (Spot)
     * @see https://bybit-exchange.github.io/docs/v5/asset/asset-info
     *
     * @param $params array
     * @return array
     */
    public function getAssetInfo($params) {
        $response = $this->call(ApiRequest::METHOD_GET, '/v5/asset/transfer/query-asset-info', $params);
        return $response->getApiData();
    }
    

    /**
     * Get All Coins Balance
     * @see https://bybit-exchange.github.io/docs/v5/asset/all-balance
     *
     * @param $params array
     * @return array
     */
    public function getAllCoinsBalance($params) {
        $response = $this->call(ApiRequest::METHOD_GET, '/v5/asset/transfer/query-account-coins-balance', $params);
        return $response->getApiData();
    }

    
    /**
     * Get Single Coin Balance
     * @see https://bybit-exchange.github.io/docs/v5/asset/account-coin-balance
     *
     * @param $params array
     * @return array
     */
    public function getSingleCoinBalance($params) {
        $response = $this->call(ApiRequest::METHOD_GET, ' /v5/asset/transfer/query-account-coin-balance', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Get Transferable Coin
     * @see https://bybit-exchange.github.io/docs/v5/asset/transferable-coin
     *
     * @param $params array
     * @return array
     */
    public function getTransferableCoin($params) {
        $response = $this->call(ApiRequest::METHOD_GET, ' /v5/asset/transfer/query-transfer-coin-list', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Create Internal Transfer
     * @see https://bybit-exchange.github.io/docs/v5/asset/create-inter-transfer
     *
     * @param $params array
     * @return array
     */
    public function createInternalTransfer($params) {
        $response = $this->call(ApiRequest::METHOD_POST, ' /v5/asset/transfer/inter-transfer', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Get Internal Transfer Records
     * @see https://bybit-exchange.github.io/docs/v5/asset/inter-transfer-list
     *
     * @param $params array
     * @return array
     */
    public function getInternalTransferRecords($params) {
        $response = $this->call(ApiRequest::METHOD_GET, ' /v5/asset/transfer/query-inter-transfer-list', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Get Sub UID
     * @see https://bybit-exchange.github.io/docs/v5/asset/sub-uid-list
     *
     * @param $params array
     * @return array
     */
    public function getSubUID($params) {
        $response = $this->call(ApiRequest::METHOD_GET, ' /v5/asset/transfer/query-sub-member-list', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Create Universal Transfer
     * @see https://bybit-exchange.github.io/docs/v5/asset/unitransfer
     *
     * @param $params array
     * @return array
     */
    public function createUniversalTransfer($params) {
        $response = $this->call(ApiRequest::METHOD_POST, ' /v5/asset/transfer/universal-transfer', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Get Universal Transfer Records
     * @see https://bybit-exchange.github.io/docs/v5/asset/unitransfer-list
     *
     * @param $params array
     * @return array
     */
    public function getUniversalTransferRecords($params) {
        $response = $this->call(ApiRequest::METHOD_GET, ' /v5/asset/transfer/query-universal-transfer-list', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Get Allowed Deposit Coin Info
     * @see https://bybit-exchange.github.io/docs/v5/asset/deposit-coin-spec
     *
     * @param $params array
     * @return array
     */
    public function getAllowedDepositCoinInfo($params) {
        $response = $this->call(ApiRequest::METHOD_GET, ' /v5/asset/deposit/query-allowed-list', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Set Deposit Account
     * @see https://bybit-exchange.github.io/docs/v5/asset/set-deposit-acct
     *
     * @param $params array
     * @return array
     */
    public function setDepositAccount($params) {
        $response = $this->call(ApiRequest::METHOD_POST, ' /v5/asset/deposit/deposit-to-account', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Get Deposit Records (on-chain)
     * @see https://bybit-exchange.github.io/docs/v5/asset/deposit-record
     *
     * @param $params array
     * @return array
     */
    public function getDepositRecords($params) {
        $response = $this->call(ApiRequest::METHOD_GET, ' /v5/asset/deposit/query-record', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Get Sub Deposit Records (on-chain)
     * @see https://bybit-exchange.github.io/docs/v5/asset/sub-deposit-record
     *
     * @param $params array
     * @return array
     */
    public function getSubDepositRecords($params) {
        $response = $this->call(ApiRequest::METHOD_GET, ' /v5/asset/deposit/query-sub-member-record', $params);
        return $response->getApiData();
    }
    
 
    /**
     * Get Internal Deposit Records (off-chain)
     * @see https://bybit-exchange.github.io/docs/v5/asset/internal-deposit-record
     *
     * @param $params array
     * @return array
     */
    public function getInternalDepositRecords($params) {
        $response = $this->call(ApiRequest::METHOD_GET, ' /v5/asset/deposit/query-internal-record', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Get Master Deposit Address
     * @see https://bybit-exchange.github.io/docs/v5/asset/master-deposit-addr
     *
     * @param $params array
     * @return array
     */
    public function getMasterDepositAddress($params) {
        $response = $this->call(ApiRequest::METHOD_GET, ' /v5/asset/deposit/query-address', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Get Sub Deposit Address
     * @see https://bybit-exchange.github.io/docs/v5/asset/sub-deposit-addr
     *
     * @param $params array
     * @return array
     */
    public function getSubDepositAddress($params) {
        $response = $this->call(ApiRequest::METHOD_GET, ' /v5/asset/deposit/query-sub-member-address', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Get Coin Info
     * @see https://bybit-exchange.github.io/docs/v5/asset/coin-info
     *
     * @param $params array
     * @return array
     */
    public function getCoinInfo($params) {
        $response = $this->call(ApiRequest::METHOD_GET, ' /v5/asset/coin/query-info', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Get Withdrawal Records
     * @see https://bybit-exchange.github.io/docs/v5/asset/withdraw-record
     *
     * @param $params array
     * @return array
     */
    public function getWithdrawalRecords($params) {
        $response = $this->call(ApiRequest::METHOD_GET, ' /v5/asset/withdraw/query-record', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Get Withdrawable Amount
     * @see https://bybit-exchange.github.io/docs/v5/asset/delay-amount
     *
     * @param $params array
     * @return array
     */
    public function getWithdrawableAmount($params) {
        $response = $this->call(ApiRequest::METHOD_GET, ' /v5/asset/withdraw/withdrawable-amount', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Withdraw
     * @see https://bybit-exchange.github.io/docs/v5/asset/withdraw
     *
     * @param $params array
     * @return array
     */
    public function withdraw($params) {
        $response = $this->call(ApiRequest::METHOD_POST, ' /v5/asset/withdraw/create', $params);
        return $response->getApiData();
    }
    
    
    /**
     * Cancel Withdrawal
     * @see https://bybit-exchange.github.io/docs/v5/asset/cancel-withdraw
     *
     * @param $params array
     * @return array
     */
    public function cancelWithdrawal($params) {
        $response = $this->call(ApiRequest::METHOD_POST, ' /v5/asset/withdraw/cancel', $params);
        return $response->getApiData();
    }

}