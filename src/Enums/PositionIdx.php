<?php 

namespace ByBit\SDK\Enums;

/**
 * positionIdx enum
 * 
 * @see https://bybit-exchange.github.io/docs/v5/enum#positionidx
 */
class PositionIdx {

    const ONE_WAY_MODE = 0;     // one-way mode position
    const BUY_SIDE_HEDGE_MODE = 1;   // Buy side of hedge-mode position
    const SELL_SIDE_HEDGE_MODE = 2;  // Sell side of hedge-mode position

}