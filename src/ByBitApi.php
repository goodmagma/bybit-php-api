<?php
namespace ByBit\SDK;

use ByBit\SDK\Api\MarketApi;
use ByBit\SDK\Api\PositionApi;
use ByBit\SDK\Api\AccountApi;
use ByBit\SDK\Api\TradeApi;
use ByBit\SDK\Api\UserApi;
use ByBit\SDK\Api\AssetApi;
use ByBit\SDK\Api\PreUpgradeApi;
use ByBit\SDK\Api\SpotLeverageTokenApi;
use ByBit\SDK\Api\SpotMarginTradeUtaApi;
use ByBit\SDK\Api\SpotMarginTradeNormalApi;
use ByBit\SDK\Api\InstitutionalLendingApi;

/**
 * ByBitApi Client
 *
 */
class ByBitApi {

    /**
     * @var string SDK Version
     */
    const NAME = "ByBit-PHP-SDK";
    
    /**
     * @var string SDK Version
     */
    const VERSION = "0.5.0";
    
    /**
     * @var string SDK update date
     */
    const UPDATE_DATE = "2023.09.12";

    /**
     * @var string sandbox API URL
     */
    const SANDBOX_API_URL = "https://api-testnet.bybit.com";

    /**
     * @var string prod API URL
     */
    const PROD_API_URL = "https://api.bybit.com";
    
    
    protected $key;
    protected $secret;
    protected $host;
    
    
    /**
     * Constructor
     * 
     * @param string $key
     * @param string $secret
     * @param string $sandbox, default false, true for use sandbox api
     */
    function __construct($key = '', $secret = '', $sandbox = false) {
        $this->key = $key;
        $this->secret = $secret;
        $this->host = $sandbox ? self::SANDBOX_API_URL : self::PROD_API_URL;
    }
    
    
    /**
     * Get Market Api
     */
    public function marketApi(){
        return new MarketApi($this->key, $this->secret, $this->host);
    }
    
    
    /**
     * Get Trade Api
     */
    public function tradeApi(){
        return new TradeApi($this->key, $this->secret, $this->host);
    }
    

    /**
     * Get Position Api
     */
    public function positionApi(){
        return new PositionApi($this->key, $this->secret, $this->host);
    }
    
    
    /**
     * Get Pre Upgrade Api
     */
    public function preUpgradeApi(){
        return new PreUpgradeApi($this->key, $this->secret, $this->host);
    }
    
    
    /**
     * Get Account Api
     */
    public function accountApi(){
        return new AccountApi($this->key, $this->secret, $this->host);
    }
    
    
    /**
     * Get Asset Api
     */
    public function assetApi(){
        return new AssetApi($this->key, $this->secret, $this->host);
    }
    
    
    /**
     * Get User Api
     */
    public function userApi(){
        return new UserApi($this->key, $this->secret, $this->host);
    }
    

    /**
     * Get Spot Leverage Token Api
     */
    public function spotLeverageTokenApi(){
        return new SpotLeverageTokenApi($this->key, $this->secret, $this->host);
    }

    
    /**
     * Get Spot Margin Trade (UTA) Api
     */
    public function spotMarginTradeUtaApi(){
        return new SpotMarginTradeUtaApi($this->key, $this->secret, $this->host);
    }
    
    
    /**
     * Get Spot Margin Trade (Normal) Api
     */
    public function spotMarginTradeNormalApi(){
        return new SpotMarginTradeNormalApi($this->key, $this->secret, $this->host);
    }
    
    
    /**
     * Institutional Lending Api
     */
    public function institutionalLendingApi(){
        return new InstitutionalLendingApi($this->key, $this->secret, $this->host);
    }

}