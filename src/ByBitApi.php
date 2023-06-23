<?php
namespace ByBit\SDK;

use ByBit\SDK\Api\MarketApi;
use ByBit\SDK\Api\PositionApi;
use ByBit\SDK\Api\AccountApi;
use ByBit\SDK\Api\TradeApi;

/**
 * ByBitApi class
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
    const VERSION = "1.0.0";
    
    /**
     * @var string SDK update date
     */
    const UPDATE_DATE = "2023.06.22";
    
    
    protected $key;
    protected $secret;
    protected $host;
    
    
    /**
     * Constructor
     * 
     * @param string $key
     * @param string $secret
     * @param string $host
     */
    function __construct(string $key = '', string $secret = '', string $host = 'https://api.bybit.com') {
        $this->key = $key;
        $this->secret = $secret;
        $this->host = $host;
    }
    
    
    /**
     * Get Market Api
     */
    public function marketApi(){
        return  new MarketApi($this->key, $this->secret, $this->host);
    }
    

    /**
     * Get Position Api
     */
    public function positionApi(){
        return  new PositionApi($this->key, $this->secret, $this->host);
    }
    
    
    /**
     * Get Account Api
     */
    public function accountApi(){
        return  new AccountApi($this->key, $this->secret, $this->host);
    }
    
    
    /**
     * Get Trade Api
     */
    public function tradeApi(){
        return  new TradeApi($this->key, $this->secret, $this->host);
    }
}