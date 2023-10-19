<?php 

namespace ByBit\SDK\Enums;

/**
 * status enum
 * 
 * @see https://bybit-exchange.github.io/docs/v5/enum#status
 */
class Status {

    const PRELAUNCH     = 'PreLaunch';
    const TRADING       = 'Trading';
    const SETTLING      = 'Settling';   // The unique status for USDC Perpetual 8-hour settlement
    const DELIVERING    = 'Delivering';
    const CLOSED        = 'Closed';

}