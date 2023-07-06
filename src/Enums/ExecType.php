<?php 

namespace ByBit\SDK\Enums;

/**
 * execType enum
 * 
 * @see https://bybit-exchange.github.io/docs/v5/enum#exectype
 */
class ExecType {

    const TRADE = 'Trade';
    const ADLTRADE = 'AdlTrade';    // Auto-Deleveraging
    const FUNDING = 'Funding';      // Funding fee
    const BUSTTRADE = 'BustTrade';  // Liquidation
    const DELIVERY = 'Delivery';    // USDC futures delivery
    const BLOCKTRADE = 'BlockTrade';

}