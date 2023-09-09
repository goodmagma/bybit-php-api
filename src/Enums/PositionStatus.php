<?php 

namespace ByBit\SDK\Enums;

/**
 * positionStatus enum
 * 
 * @see https://bybit-exchange.github.io/docs/v5/enum#positionstatus
 */
class PositionStatus {

    const NORMAL = 'Normal';
    const LIQ = 'Liq';      // in the liquidation progress
    const ADL = 'Adl';      // in the auto-deleverage progress

}