<?php 

namespace ByBit\SDK\Enums;

/**
 * position Mode enum
 * 
 * @see https://bybit-exchange.github.io/docs/v5/position/position-mode
 * 
 * mode: integer	Position mode. 0: Merged Single. 3: Both Sides
 */
class PositionMode {

    const MERGED_SINGLE = 0;
    const BOTH_SIDES = 3;

}