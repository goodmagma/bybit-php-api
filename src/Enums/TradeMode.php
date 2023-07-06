<?php 

namespace ByBit\SDK\Enums;

/**
 * tradeMode enum
 * 
 * @see https://bybit-exchange.github.io/docs/v5/position
 * 
 *  tradeMode	integer	Trade mode
 *   Normal & UTA (inverse): 0: cross-margin, 1: isolated margin
 *   UTA: depreciated, always 0
 * 
 */
class TradeMode {

    const CROSS_MARGIN = 0;
    const ISOLATED_MARGIN = 1;

}