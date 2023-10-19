<?php 

namespace ByBit\SDK\Enums;

/**
 * copyTrading enum
 * 
 * @see https://bybit-exchange.github.io/docs/v5/enum#copytrading
 */
class CopyTrading {

    const NONE  = 'none';               // Regardless of normal account or UTA account, this trading pair does not support copy trading
    const BOTH  = 'both';               // For both normal account and UTA account, this trading pair supports copy trading
    const UTAONLY = 'utaOnly';          // Only for UTA account,this trading pair supports copy trading
    const NORMALONLY = 'normalOnly';    // Only for normal account, this trading pair supports copy trading
    

}