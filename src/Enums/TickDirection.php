<?php 

namespace ByBit\SDK\Enums;

/**
 * tickDirection enum
 * 
 * @see https://bybit-exchange.github.io/docs/v5/enum#tickdirection
 */
class TickDirection {

    const PLUSTICK = 'PlusTick';
    const ZEROPLUSTICK = 'ZeroPlusTick';    // trade occurs at the same price as the previous trade, which occurred at a price higher than that for the trade preceding it
    const MINUSTICK = 'MinusTick';          // price drop
    const ZEROMINUSTICK = 'ZeroMinusTick';  // trade occurs at the same price as the previous trade, which occurred at a price lower than that for the trade preceding it

}