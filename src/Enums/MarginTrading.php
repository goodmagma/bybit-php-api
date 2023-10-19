<?php 

namespace ByBit\SDK\Enums;

/**
 * status marginTrading
 * 
 * @see https://bybit-exchange.github.io/docs/v5/enum#margintrading
 */
class MarginTrading {

    const NONE  = 'none';                       // Regardless of normal account or UTA account, this trading pair does not support margin trading
    const BOTH  = 'both';                       // For both normal account and UTA account, this trading pair supports margin trading
    const UTAONLY = 'utaOnly';                  // Only for UTA account,this trading pair supports margin trading
    const NORMALSPOTONLY = 'normalSpotOnly';    // Only for normal account, this trading pair supports margin trading

}